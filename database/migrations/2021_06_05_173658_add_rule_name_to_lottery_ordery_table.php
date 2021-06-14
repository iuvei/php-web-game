<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRuleNameToLotteryOrderyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery_order', function (Blueprint $table) {
            $table->string('rule_name')->comment('玩法组名')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lottery_order', function (Blueprint $table) {
            $table->dropColumn('rule_name');
        });
    }
}
