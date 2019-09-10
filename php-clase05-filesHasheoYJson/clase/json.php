<?php

$productos = [
  ["nombre" => "remera",
  "categoria" => "hombre",
  "precio" => 1234],

  ["nombre" => "pantalon",
  "categoria" => "mujer",
  "precio" => 4321],
];

$json = json_encode($productos, JSON_PRETTY_PRINT);
var_dump($json);

$listaProductos = json_decode($json, true);

$listaProductos[] = ["nombre" => "zapatillas",
                    "categoria" => "niños",
                    "precio" => 1267];

var_dump($listaProductos);
$json = json_encode($listaProductos, JSON_PRETTY_PRINT);
var_dump($json);

//Guardar $json en un archivo

file_put_contents("data.json", $json, FILE_APPEND);
