<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('description', 300);
            $table->decimal('price', 10, 2);
            $table->string('featured_img', 300);
            $table->integer('cant');
            $table->bigInteger('user_id')->unsigned();//Deben coinsidir en:
            //1. Data type (ambos deben ser bigInteger (bigIncrements es por detrás bigInteger. Revisen la documentación para bigIncrements.))
            //2. Collation: por default son iguales.
            //3. La definición de signo: por default Laravel define que bigIncrements es de tipo unsigned por lo tanto hay que aclararlo también en este campo.
            $table->smallInteger('status')->default(0); //El estado del producto en el carrito. 0 es carrito abierto. 1 es carrito cerrado/ comprado.
            $table->bigInteger('cart_number');//Permite identificar a los productos asociados a una determinada compra.
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('carts');
    }
}
