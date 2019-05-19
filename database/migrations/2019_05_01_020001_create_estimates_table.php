<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('timeToCall');
            $table->string('locationProperty');
            $table->string('lotArea')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('floorArea')->nullable();
            $table->string('classfication')->nullable();
            $table->string('numberOfFloors')->nullable();
            $table->string('numberOfRooms')->nullable();
            $table->string('preferDesign')->nullable();
            $table->string('preferedFinished')->nullable();
            $table->string('numberOfToiletAndBath')->nullable();
            $table->string('otherSpecification')->nullable();
            $table->string('carGarage')->nullable();
            $table->date('paymentDate');
            $table->integer('approximateBudget')->nullable();
            $table->text('message')->nullable();
            $table->text('documents');
            $table->enum('type',['minor','major']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estimates');
    }
}
