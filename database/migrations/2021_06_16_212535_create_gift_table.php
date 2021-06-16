<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default('1')->comment('类型1=普通;2=豪华');
            $table->string('image')->default('')->comment('图片');
            $table->string('svga')->nullable()->comment('动画');
            $table->decimal('swf_time')->default('0.00')->comment('动画时长');
            $table->tinyInteger('is_quanzhan')->default('2')->comment('全站飘屏1=是；2=否');
            $table->tinyInteger('status')->default('1')->comment('状态1=开启；2=关闭');
            $table->integer('sort')->default('0')->comment('排序');
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
        Schema::dropIfExists('gift');
    }
}
