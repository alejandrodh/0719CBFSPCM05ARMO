<?php

include "connection.php";

//Mostrar todas las series.
$query = $db->prepare("SELECT * FROM series");
$query->execute();

$series = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de series</title>
  </head>
  <body>
    <h1>Lista de series</h1>
    <ul>
      <?php foreach ($series as $serie): ?>
        <li>
          <a href="serie.php?id=<?= $serie["id"] ?>"><?= $serie["title"] ?></a>
          </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
