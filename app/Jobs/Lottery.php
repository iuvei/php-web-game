<?php

namespace App\Jobs;

use App\Models\LotteryOrder;
use App\Models\LotteryRecord;


use App\Jobs\EditUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mavinoo\Batch\Batch;


class Lottery implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 2;
    public $timeout = 120;

    protected $lotteryRecord;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(LotteryRecord $lotteryRecord)
    {

        $this->lotteryRecord = $lotteryRecord;


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $model = new LotteryOrder;
        LotteryOrder::with(['lottery'])->where('issue', $this->lotteryRecord['issue'])
            ->where('status',2)->where('lottery_id',$this->lotteryRecord['lottery_id'])->chunk(500,function($order)use($model){
                $update = [];
                foreach ($order as $v)
                {

                    $bonus = call_user_func($v['rule_code'],$v,$this->lotteryRecord['code']);
                    $update[] = ['id'=>$v->id, 'bonus' => $bonus, 'status' => $bonus > 0 ? 1 : 4 ,'code' => $this->lotteryRecord['code']];
                    if($bonus > 0)
                    {
                        // 返奖金
                        EditUser::dispatch([$v->user_id,$bonus,$v->lottery->title]);
                    }
                }
                \batch()->update($model,$update, 'id');
            });
    }
}
