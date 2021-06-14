<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_rule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lottery_id')->comment('游戏ID');
            $table->decimal('rate')->comment('赔率');
            $table->string('rule_name')->default('')->comment('玩法名称');
            $table->string('rule_code')->default('')->comment('玩法代码');
            $table->tinyInteger('status')->default(2)->comment('状态;1=开启;2=关闭');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lottery_rule');
    }
}
