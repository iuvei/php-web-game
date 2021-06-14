<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditBonusToLotteryOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lottery_order', function (Blueprint $table) {
            $table->decimal('bonus',8,2)->nullable()->default(0.00)->change();
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
            $table->decimal('bonus',8,2)->change();
        });
    }
}
