<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class VipUser extends BaseModel
{
	use HasDateTimeFormatter;
    protected $connection = 'tiane';
    protected $table = 'cmf_vip_user';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    public function getAddtimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    public function getEndtimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }
}
