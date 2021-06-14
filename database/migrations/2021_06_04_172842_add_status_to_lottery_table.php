<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToLotteryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1)->comment('状态:1=开启;2=关闭');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lottery', function (Blueprint $table) {
            //
            $table->dropColumn('status');
        });
    }
}
