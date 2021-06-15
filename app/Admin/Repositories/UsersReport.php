<?php

namespace App\Admin\Repositories;

use App\Models\UsersReport as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class UsersReport extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
