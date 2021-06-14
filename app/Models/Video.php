<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'video';

    public function videoClass()
    {
        return $this->belongsTo(VideoClass::class);
    }
}
