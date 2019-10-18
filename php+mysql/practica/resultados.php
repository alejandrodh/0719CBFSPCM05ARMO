<?php
// 4 Resultados del buscador

include_once "pdo.php";
var_dump($_GET);

$type = $_GET['type'];
$search = "%".$_GET['search']."%";

$stmt = $db->prepare("SELECT * FROM $type WHERE title LIKE :search ");
//var_dump($stmt);

//$stmt->bindValue(":type", $type); No va a funcionar.

$stmt->bindValue(":search", $search);
$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Resultados de búsquedas</h1>
    <?php  var_dump($resultados) ?>

  </body>
</html>
