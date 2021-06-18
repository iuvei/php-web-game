<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class UsersAccountChange extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'users_account_change';

    protected $fillable = ['user_id', 'type','before_money','money','after_money','remark'];



}
