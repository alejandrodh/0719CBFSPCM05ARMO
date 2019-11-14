<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('product_id')->unsigned();
          $table->string('image', 200);
          $table->timestamps();

          $table->foreign('product_id')
          ->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_products');
    }
}
