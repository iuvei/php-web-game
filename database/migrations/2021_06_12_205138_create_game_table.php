<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_class_id')->comment('游戏分类ID');
            $table->string('name')->default('')->comment('名字');
            $table->string('code')->default('')->comment('代码');
            $table->tinyInteger('status')->comment('状态1=开启2=关闭');
            $table->integer('sort')->comment('排序');
            $table->tinyInteger('is_recommend')->comment('推荐1=是；2=否');
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
        Schema::dropIfExists('game');
    }
}
