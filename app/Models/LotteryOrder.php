<?php

namespace App\Models;

use Carbon\Carbon;
use Dcat\Admin\Grid;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class LotteryOrder extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;
    use HasFactory;

    protected $table = 'lottery_order';

    protected $fillable = ['bonus', 'status'];

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function lottery_record()
    {
        return $this->belongsTo(\App\Models\LotteryRecord::class);
    }

    public function lottery_rule()
    {
        return $this->belongsTo(\App\Models\LotteryRule::class);
    }

    public function scopeStatus($query, $status)
    {
        if ($status) {
            return $query->where('status', $status);
        }
        return $query;
    }

    public function scopeIssue($query, $issue)
    {
        if ($issue) {
            return $query->where('issue', $issue);
        }
        return $query;
    }

    public function scopeUid($query, $user_id)
    {
        if ($user_id) {
            return $query->where('user_id', $user_id);
        }
        return $query;
    }

    public function scopeOrderNo($query, $order_no)
    {
        if ($order_no) {
            return $query->where('order_no', $order_no);
        }
        return $query;
    }

    public function scopeLotteryId($query, $lottery_id)
    {
        if ($lottery_id) {
            return $query->where('lottery_id', $lottery_id);
        }
        return $query;
    }

    public function scopeCreatedAt($query, $created_at)
    {

        if (!empty($created_at['start']) || !empty($created_at['end'])) {
            return $query->whereBetween('created_at', [$created_at['start'], $created_at['end']]);
        } else {
            return $query->where('created_at', '>=', Carbon::today()->toDateString());
        }
    }

    public static function conditionStatistics(Grid $grid)
    {
        $status = $grid->getRequestInput('status');
        $issue = $grid->getRequestInput('issue');
        $user_id = $grid->getRequestInput('user_id');
        $order_no = $grid->getRequestInput('order_no');
        $lottery_id = $grid->getRequestInput('lottery_id');
        $created_at = $grid->getRequestInput('created_at');

        $res = self::Status($status)
            ->Issue($issue)
            ->Uid($user_id)
            ->OrderNo($order_no)
            ->LotteryId($lottery_id)
            ->CreatedAt($created_at)
            ->select(DB::raw('sum(money) money'), DB::raw('sum(bonus) bonus'))
            ->first();

        return $res;
    }


}
