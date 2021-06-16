<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasDateTimeFormatter;
    protected $table = 'setting';
    protected $fillable = ['name', 'content'];

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value,JSON_UNESCAPED_UNICODE);
    }

    public function getContentAttribute($value)
    {
        return json_decode($value,true);
    }
}
