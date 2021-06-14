<?php

namespace App\Admin\Repositories;

use App\Models\Video as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Video extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
