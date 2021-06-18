<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;

class LotteryRecord extends BaseModel
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'lottery_record';

    protected $fillable = [
        'lottery_id', 'issue', 'lottery_time', 'type'
    ];

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function scopeLotteryTime($query)
    {
        return $query->where('lottery_time','<', time());
    }

    public function scopeLotteryId($query, $value)
    {
        return $query->where('lottery_id', $value);
    }

    public function scopeCurrentIssue($query)
    {
        return $query->where('lottery_time','>', time());
    }
}
