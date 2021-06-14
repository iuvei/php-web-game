<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class GameClass extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'game_class';
    
}
