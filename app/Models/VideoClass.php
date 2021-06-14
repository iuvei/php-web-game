<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class VideoClass extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'video_class';
    
}
