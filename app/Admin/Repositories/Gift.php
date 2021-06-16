<?php

namespace App\Admin\Repositories;

use App\Models\Gift as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Gift extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
