<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class User extends BaseModel
{
    use HasDateTimeFormatter;

    protected $table = 'users';


}
