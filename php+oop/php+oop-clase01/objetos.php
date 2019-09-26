<?php
include "clases/mascota.php";

$mascota1 = new Mascota("Oliverio", "gato"); //Si no hay parámetros no es necesario escribir los ().
//$miPerro->nombre = "Oliverio";
//$mascota1->setColor("gris")->setNombre("Oliverio")->setEspecie("gato");
$mascota1->setColor("gris");



$mascota2 = new Mascota("tweety", "canario");
$mascota2->setColor("amarillo");



var_dump($mascota1, $mascota2);
