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
    //return view('welcome'); //vista fija.
    return view('welcome'); //vista fija.
});

Route::get('/unparametro/{param}', function($param){
  return "Hola esta es una frase con un parametro: $param"; //devuelve texto con los datos del param obligatorio.
});

Route::get('/unparametrooptativo/{param?}', function($param = "no recibí datos."){
  return "Hola esta es una frase con un parametro optativo: $param"; //devuelve texto con los datos del param optativo.
});

Route::get('/producto/{id}', function ($id) {
    //$vac = compact('id');
    return view('home', compact('id')); //vista fija.
});

Route::get('/peliculas', function(){
  $peliculas = [
    0 => "Creed",
    1 => "Rambo V",
    2 => "Expendables",
    3 => "Avengers -  End Game",
    4 => "The Mule"
  ];
  //$peliculas = [];

  return view('peliculas', compact('peliculas'));

});

Route::get('/lista-productos', function(){
  return view('productos');
});

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{id}', 'MovieController@show');
Route::get('/actores', 'ActorController@directory');

Route::get('/actores/buscar', 'ActorController@search');
Route::get('/actor/{id}', 'ActorController@show');









//
