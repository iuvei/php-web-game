<?php

namespace App\Admin\Repositories;

use App\Models\VideoClass as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class VideoClass extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
