<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoClassIdToVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video', function (Blueprint $table) {
            $table->integer('video_class_id')->comment('分类ID');
            $table->integer('likes')->default(0)->change();
            $table->integer('views')->default(0)->change();
            $table->integer('comments')->default(0)->change();
            $table->integer('sort')->default(0)->change();
            $table->boolean('status')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video', function (Blueprint $table) {
            $table->dropColumn('video_class_id');
            $table->integer('likes')->change();
            $table->integer('views')->change();
            $table->integer('comments')->change();
            $table->integer('sort')->change();
            $table->boolean('status')->change();

        });
    }
}
