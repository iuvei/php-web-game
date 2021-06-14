<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class LotteryRuleGroup extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'lottery_rule_group';

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }

    public function rule()
    {
        return $this->hasMany(LotteryRule::class);
    }
}
