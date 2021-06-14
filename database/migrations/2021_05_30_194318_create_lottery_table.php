<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->comment('彩票分类');
            $table->string('title')->default('')->comment('彩种名称');
            $table->string('name')->default('')->comment('彩种标示(唯一值)');
            $table->integer('time')->comment('停止投注间隔');
            $table->integer('Issue')->comment('期数');
            $table->string('desc')->nullable()->comment('彩种简介');
            $table->tinyInteger('expect_time')->comment('开奖时间');
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
        Schema::dropIfExists('lottery');
    }
}
