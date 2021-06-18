<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class Game extends BaseModel
{
    use HasDateTimeFormatter;

    protected $table = 'game';


    public function gameClass()
    {
        return $this->belongsTo(GameClass::class);
    }

    public function scopeIsRecommend($query)
    {
        return $query->where('is_recommend', 1);
    }

    public function scopeClassId($query, $class_id = 7)
    {
        return $query->where('game_class_id', $class_id);
    }

}
