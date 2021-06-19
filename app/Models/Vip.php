<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Vip extends Model
{
	use HasDateTimeFormatter;
    protected $connection = 'tiane';
    protected $table = 'cmf_vip';
    public $timestamps = false;

    public function getAddtimeAttribute($value)
    {
        return date('Y-m-d H:i;s');
    }
}
