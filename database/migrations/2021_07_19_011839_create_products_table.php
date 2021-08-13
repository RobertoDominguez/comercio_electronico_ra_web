<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('discount_id');

            $table->boolean('active');
            $table->string('description');
            $table->string('image');
            $table->string('name');
            $table->UnsignedFloat('price');
            $table->unsignedSmallInteger('rank');
            $table->boolean('removed');
            $table->unsignedSmallInteger('stock');

            $table->foreign('discount_id')->references('id')->on('discounts')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
