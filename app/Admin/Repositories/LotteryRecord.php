<?php

namespace App\Admin\Repositories;

use App\Models\LotteryRecord as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LotteryRecord extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
