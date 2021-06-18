<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class Setting extends BaseModel
{
    use HasDateTimeFormatter;

    protected $table = 'setting';
    protected $fillable = ['name', 'content'];

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = json_encode($value, JSON_UNESCAPED_UNICODE);
    }

    public function getContentAttribute($value)
    {
        return json_decode($value, true);
    }

    public function scopeName($query)
    {
        return $query->where('name','setting');
    }
}
