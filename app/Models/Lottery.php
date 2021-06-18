<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lottery extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'lottery';


    public function scopeName($query,$value)
    {
        return $query->where('name', $value);
    }

    public function scopeIsRecommend($query)
    {
        return $query->where('is_recommend', 1);
    }

    public function rule()
    {
        return $this->hasMany(LotteryRule::class);
    }

    public function group()
    {
        return $this->hasMany(LotteryRuleGroup::class);
    }
}
