<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sex')->default('0')->comment('性别;0:保密,1:男,2:女');
            $table->integer('last_login_time')->default('0')->comment('最后登录时间');
            $table->decimal('coin')->default('0')->comment('金币');
            $table->decimal('freeze_balance')->default('0')->comment('冻结余额');
            $table->decimal('balance')->default('0')->comment('余额');
            $table->tinyInteger('status')->default('2')->comment('用户状态;0:禁用,1:正常,2:未验证');
            $table->string('password')->default('')->comment('密码');
            $table->string('username')->unique()->default('')->comment('账号');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('last_login_ip')->nullable()->comment('最后登录ip');
            $table->string('mobile')->unique()->nullable()->comment('手机号');
            $table->decimal('total_money')->default('0')->comment('充值金额');
            $table->decimal('withdrawal_amount')->default('0')->comment('提款金额');
            $table->string('location')->nullable()->comment('所在地');
            $table->string('nicename')->nullable()->comment('用户昵称');
            $table->decimal('consumption')->default('0')->comment('消费总额');
            $table->string('level')->default('')->comment('层级');
            $table->integer('parent_id')->comment('父级id');
            $table->string('login_type')->nullable()->comment('登录方式');
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
        Schema::dropIfExists('users');
    }
}
