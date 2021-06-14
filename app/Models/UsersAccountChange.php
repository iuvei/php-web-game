<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class UsersAccountChange extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'users_account_change';
    
    protected $fillable = ['user_id', 'type','before_money','money','after_money','remark'];
    
}
