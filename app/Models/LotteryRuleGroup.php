<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class LotteryRuleGroup extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'lottery_rule_group';

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function rule()
    {
        return $this->hasMany(LotteryRule::class);
    }
}
