<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'report';

    protected $fillable = ['bottom_pour', 'bonus', 'deposit', 'withdrawal', 'rebates', 'activity','addtime'];

}
