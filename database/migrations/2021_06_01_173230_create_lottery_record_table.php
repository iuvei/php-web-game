<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lottery_record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lottery_id')->comment('彩种ID');
            $table->string('issue')->default('')->comment('期号');
            $table->string('num')->unique()->default('')->comment('开奖号码');
            $table->integer('lottery_time')->comment('开奖时间');
            $table->tinyInteger('type')->default('1')->comment('来源 1=系统；2=预设');
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
        Schema::dropIfExists('lottery_record');
    }
}
