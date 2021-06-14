<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('deposit')->comment('存款');
            $table->decimal('withdrawal')->comment('取款');
            $table->decimal('bonus')->comment('奖金');
            $table->decimal('bottom_pour')->comment('下注');
            $table->decimal('rebates')->comment('返点');
            $table->decimal('activity')->comment('活动');
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
        Schema::dropIfExists('report');
    }
}
