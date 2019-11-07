<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('description', 300);
            $table->decimal('price', 10, 2);
            $table->bigInteger('user_id')->unsigned();//Deben coinsidir en:
            //1. Data type (ambos deben ser bigInteger (bigIncrements es por detrás bigInteger. Revisen la documentación para bigIncrements.))
            //2. Collation: por default son iguales.
            //3. La definición de signo: por default Laravel define que bigIncrements es de tipo unsigned por lo tanto hay que aclararlo también en este campo.

            $table->string('featured_img', 300);
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')->on('users');

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
