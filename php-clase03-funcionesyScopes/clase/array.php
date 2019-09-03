<?php
$cantantes = [
  0 => [
    "nombre" => "Luis",
    "apellido" => "Miguel"
  ],
  1 => [
    "nombre" => "Charly",
    "apellido" => "Garcia"
  ],
  2 => [
    "nombre" => "Joaquín",
    "apellido" => "Sabina"
  ]
];

function bucles($cantantes) {
  $nombres = [];

  foreach($cantantes as $cantante){
    $nombres[]=$cantante["nombre"];
  }

  return $nombres;
}

var_dump(bucles($cantantes));
