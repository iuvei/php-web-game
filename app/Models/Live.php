<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Support\Facades\Cache;

class Live extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'live';

    protected $fillable = ['user_id', 'is_video', 'stream', 'image', 'pull', 'type', 'type_val', 'is_hot', 'is_recommend','dev', 'lottery_id'];



}
