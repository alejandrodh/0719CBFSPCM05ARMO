<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products'); //Crear carpeta de destino. En este caso es /products. Si no está creada la consola mostrará un error.

  return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'price' => $faker->randomFloat(2, 2, 8) ,
      'user_id' => 1,
      //'user_id' => $faker->numberBetween(1,6),
      'featured_img' => $faker->image($path, 300, 300, 'fashion', false)// Guarda el archiovo emn el file sistem y guarda el nombre+extensión en la rabla de la base de datos.
  ];
});
