<?php

namespace App\Admin\Repositories;

use App\Models\Vip as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Vip extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
