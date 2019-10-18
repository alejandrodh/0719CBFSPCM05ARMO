<?php

include "connection.php";
// if($db == null){
//   echo "Por favor contacte al adminsitrador de su sitio.";
// } else {
//  var_dump($db);
// } Sugerencia Raul.


//Prepare
$query = $db->prepare("INSERT INTO actors VALUES(default, null, null, :nombre,:apellido,:rating, :pelicula )");

$query->bindValue(":nombre", "Gonza");
$query->bindValue(":apellido", "Zevallos");
$query->bindValue(":rating", "10");
$query->bindValue(":pelicula", "8");

$query->execute();

$query = $db->prepare("SELECT * FROM actors");
$query->execute();
$actores = $query->fetchAll(PDO::FETCH_ASSOC); //Solo para consultas de tipo SELECT

var_dump($actores);
