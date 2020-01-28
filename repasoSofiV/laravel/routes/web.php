<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', function(){
  return "Hola estas en la página de películas.";
});

Route::get('/peliculas/{id}', function($id){ //Ruta con parametros obligatorios.
  return "Hola estas en la página de la película: " . $id;
});

Route::get('/peliculasparamoptativo/{id?}', function($id = "No pasaste una película"){ //Ruta con parametros optativos
  return "Hola estas en la página de la película: " . $id;
});

Route::get('/actores', 'ActorsController@index');








//
