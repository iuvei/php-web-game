<?php

namespace App\Admin\Repositories;

use App\Models\VipUser as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class VipUser extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
