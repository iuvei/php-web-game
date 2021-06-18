<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;


class Banner extends BaseModel
{
	use HasDateTimeFormatter;
    protected $table = 'banner';

}
