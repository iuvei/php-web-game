<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_report', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index()->comment('用户ID');
            $table->decimal('deposit')->default('0.00')->comment('存款');
            $table->decimal('withdrawal')->default('0.00')->comment('取款');
            $table->decimal('bonus')->default('0.00')->comment('奖金');
            $table->decimal('bottom_pour')->default('0.00')->comment('下注');
            $table->decimal('rebates')->default('0.00')->comment('返点');
            $table->decimal('activity')->default('0.00')->comment('活动');
            $table->date('addtime')->comment('日期');
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
        Schema::dropIfExists('users_report');
    }
}
