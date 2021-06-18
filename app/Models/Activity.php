<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;


class Activity extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'activity';

    public function scopeClassId($query, $class_id)
    {
        return $query->where('activity_class_id', $class_id);
    }

}
