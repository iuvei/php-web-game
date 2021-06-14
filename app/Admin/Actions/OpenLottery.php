<?php

namespace App\Admin\Actions;

use App\Jobs\Lottery;
use App\Models\LotteryRecord;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OpenLottery extends RowAction
{
    /**
     * @return string
     */
	protected $title = '手动开奖';

    /**
     * Handle the action request.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function handle(Request $request)
    {
        $lottery_record = LotteryRecord::where('id', $this->getKey())->first();
        if(!$lottery_record->code)
        {
            return $this->response()->warning('请先手动设置开奖号码');
        }
        Lottery::dispatch($lottery_record);
        return $this->response()->success('开奖成功')->refresh();
    }

    /**
     * @return string|array|void
     */
    public function confirm()
    {
         return ['请确认是否手动开奖?', ''];
    }

    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    /**
     * @return array
     */
    protected function parameters()
    {
        return [];
    }
}
