<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoneyToGiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gift', function (Blueprint $table) {
            $table->decimal('money', 8,2)->default(0.00)->comment('价格');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gift', function (Blueprint $table) {
            $table->dropColumn('money');
        });
    }
}
