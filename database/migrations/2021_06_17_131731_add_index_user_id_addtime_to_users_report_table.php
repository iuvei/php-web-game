<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexUserIdAddtimeToUsersReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_report', function (Blueprint $table) {
            $table->unique(['user_id','addtime'],'unique_user_id_addtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_report', function (Blueprint $table) {
            $table->dropUnique('unique_user_id_addtime');
        });
    }
}
