<?php

namespace App\Admin\Repositories;

use App\Models\GameClass as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class GameClass extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
