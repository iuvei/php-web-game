<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('用户ID');
            $table->string('title')->default('')->comment('标题');
            $table->string('image')->default('')->comment('封面图片');
            $table->string('href')->default('')->comment('视频地址');
            $table->integer('likes')->comment('点赞数');
            $table->integer('views')->comment('浏览数');
            $table->integer('comments')->comment('评论数');
            $table->tinyInteger('status')->comment('1=正常；2关闭');
            $table->integer('sort')->comment('排序');
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
        Schema::dropIfExists('video');
    }
}
