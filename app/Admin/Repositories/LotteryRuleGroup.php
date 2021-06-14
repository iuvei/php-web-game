<?php

namespace App\Admin\Repositories;

use App\Models\LotteryRuleGroup as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LotteryRuleGroup extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;


}
