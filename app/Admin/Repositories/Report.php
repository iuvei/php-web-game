<?php

namespace App\Admin\Repositories;

use App\Models\Report as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Report extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
