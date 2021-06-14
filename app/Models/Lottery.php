<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'lottery';


    public function scopeName($query,$value)
    {
        return $query->where('name', $value);
    }

    public function scopeStatus($query)
    {
        return $query->where('status', 1);
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
