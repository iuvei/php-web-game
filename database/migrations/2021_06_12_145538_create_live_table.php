<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('live', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户id');
            $table->tinyInteger('is_video')->comment('是否录播');
            $table->string('stream')->default('')->comment('流名');
            $table->string('image')->default('')->comment('封面');
            $table->string('pull')->default('')->comment('播流地址');
            $table->string('type')->default('')->comment('直播类型');
            $table->string('type_val')->default('')->comment('类型值');
            $table->string('is_hot')->default('')->comment('是否热门');
            $table->string('is_recommend')->default('')->comment('是否推荐');
            $table->string('dev')->default('')->comment('设备信息');
            $table->string('lottery_id')->default('')->comment('游戏id');
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
        Schema::dropIfExists('live');
    }
}
