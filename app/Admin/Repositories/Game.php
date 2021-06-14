<?php

namespace App\Admin\Repositories;

use App\Models\Game as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Game extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
