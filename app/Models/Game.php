<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'game';

    public function gameClass()
    {
        return $this->belongsTo(GameClass::class);
    }
}
