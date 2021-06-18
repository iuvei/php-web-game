<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class Video extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'video';

    public function videoClass()
    {
        return $this->belongsTo(VideoClass::class);
    }

    public function scopeVideoClassId($query,$class_id = 1)
    {
        if($class_id)
        {
            return $query->where('video_class_id',$class_id);
        }
    }
}
