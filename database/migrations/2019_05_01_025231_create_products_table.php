<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->string('image')->unique();
            $table->string('type');
            $table->integer('status')->default('1');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
