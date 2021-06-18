<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class LotteryRule extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'lottery_rule';

    protected $withoutFields = [];

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }

    public function hide(array $fields)
    {
        $this->withoutFields = $fields;
        return $this;
    }

    public function lotteryRuleGroup()
    {
        return $this->belongsTo(LotteryRuleGroup::class);
    }


}
