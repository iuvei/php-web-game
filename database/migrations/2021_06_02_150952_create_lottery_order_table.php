<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no')->unique()->default('')->comment('订单号');
            $table->integer('user_id')->comment('用户ID');
            $table->integer('lottery_id')->comment('彩票ID');
            $table->integer('lottery_rule_id')->comment('玩法ID');
            $table->integer('lottery_record_id')->comment('期号ID');
            $table->decimal('money')->comment('金额');
            $table->string('content')->default('')->comment('下注');
            $table->decimal('bonus')->comment('奖金');
            $table->tinyInteger('status')->default('2')->comment('状态;1=开奖；2=未开奖；3=已返点');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lottery_order');
    }
}
