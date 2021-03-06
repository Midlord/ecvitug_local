<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });

        Schema::table('estimates', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });

        Schema::table('history', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->integer('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
