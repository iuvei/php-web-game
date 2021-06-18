<?php

namespace App\Models;

use Dcat\Admin\Admin;
use Dcat\Admin\Traits\HasDateTimeFormatter;

class User extends BaseModel
{
    use HasDateTimeFormatter;

    protected $connection = 'tiane';
    protected $table = 'cmf_user';

    public function getLastLoginTimeAttribute($value)
    {
        if($value)
        {
            return date('Y-m-d H:i:s', $value);
        }
        return '';
    }

    public function getMobileAttribute($value)
    {

        if(Admin::user()->isAdministrator() && preg_match('/^((13[0-9])|(14[5-9])|(15([0-3]|[5-9]))|(16[6-7])|(17[1-8])|(18[0-9])|(19[1|3])|(19[5|6])|(19[8|9]))\\d{8}$/',$value))
        {
            return $value;
        }
        return '';
    }

    public function getCreateTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }


}
