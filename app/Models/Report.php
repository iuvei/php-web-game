<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Support\Facades\DB;

class Report extends BaseModel
{
    use HasDateTimeFormatter;

    protected $table = 'report';

    protected $fillable = ['bottom_pour', 'bonus', 'deposit', 'withdrawal', 'rebates', 'activity', 'addtime'];

    public static function getMonthReport()
    {
        $report = DB::selectOne("select SUM(deposit) deposit,SUM(withdrawal) withdrawal,SUM(bonus) bonus,SUM(bottom_pour) bottom_pour,SUM(rebates) rebates,SUM(activity) activity from report where MONTH(addtime) = date_format(now(),'%m')");

        $deposit = $report->deposit ?? 0;
        $withdrawal = $report->withdrawal ?? 0;
        $bonus = $report->bonus ?? 0;
        $bottom_pour = $report->bottom_pour ?? 0;
        $rebates = $report->rebates ?? 0;
        $activity = $report->activity ?? 0;
        $yl = $bottom_pour-$bonus;
        return "盈利:{$yl}元，充值:{$deposit}元， 提现:{$withdrawal}元，下注:{$bottom_pour}元，奖金:{$bonus}元，返点:{$rebates}元，活动:{$activity}元";
    }

}
