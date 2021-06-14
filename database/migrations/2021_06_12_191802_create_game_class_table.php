<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_class', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('')->comment('标题');
            $table->string('image')->default('')->comment('图标');
            $table->tinyInteger('status')->comment('状态');
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
        Schema::dropIfExists('game_class');
    }
}
