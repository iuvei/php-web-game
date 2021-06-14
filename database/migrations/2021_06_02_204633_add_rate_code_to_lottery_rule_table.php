<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRateCodeToLotteryRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery_rule', function (Blueprint $table) {
            $table->integer('rate_code')->default(0)->comment('和值');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lottery_rule', function (Blueprint $table) {
            $table->dropColumn('rate_code');
        });
    }
}
