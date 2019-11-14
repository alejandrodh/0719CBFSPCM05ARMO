<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ImagesProducts;
use Faker\Generator as Faker;

$factory->define(ImagesProducts::class, function (Faker $faker) {
    $path = storage_path('app/public/products'); //Crear carpeta de destino. En este caso es /products. Si no está creada la consola mostrará un error.

    return [
      'product_id' => rand(1,10),
      'image' => $faker->image($path, 300, 300, 'fashion', false)// Guarda el archiovo emn el file sistem y guarda el nombre+extensión en la rabla de la base de datos.
    ];
});
