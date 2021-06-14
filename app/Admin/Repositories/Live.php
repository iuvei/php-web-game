<?php

namespace App\Admin\Repositories;

use App\Models\Live as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Live extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
