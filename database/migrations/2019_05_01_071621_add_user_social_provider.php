<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserSocialProvider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider_user_id')->nullable()->after('id');        //Store the provider's user id.
            $table->enum('provider', ['facebook', 'google'])->nullable()->after('id'); //Store the provider.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('provider_user_id');
            $table->dropColumn('provider');
        });
    }
}
