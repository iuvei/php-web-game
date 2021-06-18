<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Support\Facades\Cache;

class Live extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'live';
    protected $appends = ['nicename', 'avatar'];

    protected $fillable = ['user_id', 'is_video', 'stream', 'image', 'pull', 'type', 'type_val', 'is_hot', 'is_recommend','dev', 'lottery_id'];

    public function getNicenameAttribute($key)
    {
       $user = getUserInfo($this->attributes['user_id']);
       return $user['avatar'];
    }

    public function getAvatarAttribute($key)
    {
        $user = getUserInfo($this->attributes['user_id']);
        return $user['user_nicename'];
    }

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }


}
