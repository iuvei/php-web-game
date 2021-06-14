<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAccountChangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_account_change', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->default('')->comment('用户ID');
            $table->tinyInteger('type')->default(0)->comment('变动类型:1-充值,2-提现,3-彩票');
            $table->decimal('before_money')->comment('变动前');
            $table->decimal('money')->comment('金额');
            $table->decimal('after_money')->comment('变动后');
            $table->string('remark')->default('')->comment('备注');
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
        Schema::dropIfExists('users_account_change');
    }
}
