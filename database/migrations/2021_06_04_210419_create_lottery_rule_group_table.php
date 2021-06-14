<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryRuleGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_rule_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lottery_id')->default('')->comment('彩种ID');
            $table->string('title')->default('')->comment('名字');
            $table->string('status')->default('1')->comment('状态1=开启；2=关闭');
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
        Schema::dropIfExists('lottery_rule_group');
    }
}
