<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'live';

    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }

}
