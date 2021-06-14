<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRateAndIssueAndCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery_order', function (Blueprint $table) {
            $table->decimal('rate', 11,2)->default(0.00)->comment('赔率');
            $table->string('issue')->default('')->comment('期号');
            $table->string('code')->default('')->comment('开奖号码');
            $table->dropColumn('lottery_record_id');
            $table->dropColumn('lottery_rule_id');
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
            $table->dropColumn('rate');
            $table->dropColumn('issue');
            $table->dropColumn('code');
            $table->integer('lottery_record_id')->default(0)->comment('期号id');
            $table->integer('lottery_rule_id')->default(0)->comment('玩法id');
        });
    }
}
