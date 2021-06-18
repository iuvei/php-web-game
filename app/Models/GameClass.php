<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class GameClass extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'game_class';

}
