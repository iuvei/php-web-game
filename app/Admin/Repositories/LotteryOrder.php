<?php

namespace App\Admin\Repositories;

use App\Models\Lottery;
use App\Models\LotteryOrder as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LotteryOrder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;


}
