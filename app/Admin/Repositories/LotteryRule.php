<?php

namespace App\Admin\Repositories;

use App\Models\LotteryRule as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LotteryRule extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
