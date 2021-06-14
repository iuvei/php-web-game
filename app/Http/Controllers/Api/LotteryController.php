<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\LotteryByRequest;
use App\Http\Requests\LotteryTimePost;
use Illuminate\Support\Facades\DB;
use App\Models\LotteryOrder;
use App\Http\Resources\LotteryResource;
use App\Http\Resources\LotteryRecordResource;
use App\Http\Resources\LotteryOrderResource;
use App\Http\Resources\LotteryRuleGroupResource;
use App\Http\Resources\LotteryRuleResource;
use App\Http\Resources\LotteryTimeResource;
use Illuminate\Support\Facades\Cache;
use App\Models\Lottery;
use App\Models\LotteryRecord;
use App\Models\LotteryRule;
use App\Models\LotteryRuleGroup;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    public function getUser($id)
    {
        $user = DB::connection('tiane')->table('cmf_user')->where('id',$id)->first();
        return $user;
    }

    public function bettingRecord(Request $request)
    {

        $limit = $request->input('limit');
        $user_id = $request->input('user_id');
        $status = $request->input('status');

        $lottery_order = LotteryOrder::where('user_id', $user_id)->Status($status)->orderby('id', 'desc')->simplePaginate($limit);

        return LotteryOrderResource::collection($lottery_order)->additional(['code' => 0, 'message' => 'ok']);
    }

     /**
     *  下注
     * @param Request $request
     */
    public function lotteryBuy(LotteryByRequest $request)
    {
        $input = $request->all();
        $user = $this->getUser($input['user_id']);
        if(!$user)
        {
            return $this->jsonError('用户不存在');
        }
        $insert = [];

        $lottery_record = LotteryRecord::where('id', $input['lottery_record_id'])->first();

        // 判断是否过期
        if( $lottery_record->lottery_time <= time())
        {
            return $this->jsonError('当前期已过期');
        }

        $list = json_decode($input['list']);
        $date = date('Y-m-d H:i:s');
        // 获取下注总金额
        $money = collect($list)->sum('money');
        // 判断用户金额
        if($user->coin < $money)
        {
             return $this->jsonError('金额不足，请先去充值');
        }

        foreach ($list as $k=>$v)
        {
            $rule = $v->rule_id;
            $rule = Cache::rememberForever('rule:' . $rule, function ()use($rule) {
                return LotteryRule::with(['lotteryRuleGroup'])->where('id', $rule)->first();
            });

            $insert[] = [
                'order_no' => createOrderOn(),
                'user_id' => $input['user_id'],
                'lottery_id' => $input['lottery_id'],
                'money' => $v->money,
                'rate' => $rule->rate,
                'content' => $v->content,
                'rule_code' => $v->rule_code,
                'rule_name' => $rule->lotteryRuleGroup->title,
                'issue' => $lottery_record->issue,
                'created_at' => $date
            ];

        }

        DB::transaction(function ()use($insert,$user,$money)
        {
            $before_money = $user->coin;
            $after_money = $user->coin-$money;
            DB::connection('tiane')->table('cmf_user')->where('id',$user->id)->update(['coin' => $after_money]);
            userAccountChange($user->id,3,$before_money,$money,$after_money,'彩票下注');
            LotteryOrder::insert($insert);
        });

        return response()->json([
           'code' => 0,
           'message' => '下注成功',
           'money' => $user->coin - $money,
        ]);

    }

    /**
     * 开奖记录
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function lotteryRecord(Request $request)
    {

        $limit = $request->input('limit',10);
        $lottery_record = LotteryRecord::where('code', '!=', '')
            ->where('lottery_id',$request->input('lottery_id'))
            ->where('lottery_time','<=',time())
            ->orderby('id', 'desc')->simplePaginate($limit);
        return LotteryRecordResource::collection($lottery_record)->additional(['code' => 0,'message' => 'ok']);
    }


    public function lottery()
    {
        $lottery = Lottery::Status()->get();
        $array = [];
        $array['code'] = 0;
        $array['message'] = 'ok';
        foreach ($lottery as $v)
        {
            $array['data'][$v->type][] = new LotteryResource($v);
        }
       return $array;

    }

    public function lotteryRule(LotteryTimePost $request)
    {
        $name = $request->get('name');
        if(in_array($name,['yfks','sfks','wfks'])) $name = 'yfks';
        if(in_array($name,['sfssc','yfssc','wfssc'])) $name = 'yfssc';
        if(in_array($name,['yfkuaiche','sfkc','wfkc'])) $name = 'yfkuaiche';
        if(in_array($name,['sflhc','yflh','	wflhc'])) $name = 'yflh';
        $lottery = Cache::rememberForever('rule:' . $name, function ()use($name) {
            return Lottery::Name($name)->first();
        });


        return LotteryRuleGroupResource::collection($lottery->group)->additional(['code' => 0,'message' => 'ok']);
    }

    public function lotteryTime(LotteryTimePost $request)
    {
        $name = $request->get('name');

        $lottery = Cache::rememberForever('rule:' . $name, function ()use($name) {
            return Lottery::Name($name)->first();
        });

        if(!$lottery)
        {
            return $this->jsonError('彩种标识错误');
        }
        $s = date('s');
        $i = date('i');
        $expect_time = $lottery->expect_time;

        // 距离开奖时间（秒）
        $remainTime = $expect_time * 60 - (($i % $expect_time) * 60 + $s);
        // 封盘剩余时间
        $stopRemainTime = abs($remainTime - $lottery->time);

        $lotteryRecord = LotteryRecord::LotteryTime()->LotteryId($lottery->id)->orderby('id', 'desc')->first();

        // 上一期期号
        $lastIssue = $lotteryRecord->issue;
        // 上一期开奖号码
        $lastCode = $lotteryRecord->code;
        $lotteryRecord = LotteryRecord::CurrentIssue()->LotteryId($lottery->id)->first();

        // 当前期号
        $currentIssue = $lotteryRecord->issue;

        return new LotteryTimeResource([
            'code' => 0,
            'message' => 'ok',
            'remainTime' => $remainTime,
            'stopRemainTime' => $stopRemainTime,
            'lastIssue' => $lastIssue,
            'lastCode' => $lastCode,
            'currentIssue' => $currentIssue,
            'lottery_record_id' => $lotteryRecord->id,
            'title' => $lottery->title
        ]);
    }

}
