<?php

namespace Database\Factories;

use App\Models\LotteryOrder;
use App\Models\LotteryRule;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotteryOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LotteryOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lottery_rule_id = 	rand(33,34);

        return [
            'order_no' => createOrderOn(),
            'user_id' => 1,
            'lottery_id' => 1,
            'lottery_rule_id' => $lottery_rule_id ,
            'lottery_record_id' => 17094, // secret
            'money' => rand(2,10),
            'content' => $lottery_rule_id == 33 ? '大' : '小',
            'rule_code' => 'daxiao',
            'rule_name' => '大小单双',
        ];
    }
}
