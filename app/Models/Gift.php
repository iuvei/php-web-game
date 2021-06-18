<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

class Gift extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'gift';

}
