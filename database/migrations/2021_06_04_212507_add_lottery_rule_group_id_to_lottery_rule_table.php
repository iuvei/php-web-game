<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLotteryRuleGroupIdToLotteryRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery_rule', function (Blueprint $table) {
            $table->integer('lottery_rule_group_id')->default(0)->comment('玩法组ID');
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
            $table->dropColumn('lottery_rule_group_id');
        });
    }
}
