<?php
include "connection.php";
//Serie
$search = $_GET["id"];
$query = $db->prepare("SELECT * FROM series WHERE id= :id ");
$query->bindValue(":id", $search);
$query->execute();
$serie = $query->fetch(PDO::FETCH_ASSOC);

//Capítulos
$queryCapitulos = $db->prepare("SELECT series.id, series.title, count(episodes.title)as episodes
                                FROM series
                                INNER JOIN seasons ON series.id = seasons.serie_id
                                INNER JOIN episodes ON seasons.id = episodes.season_id
                                GROUP BY series.title
                                HAVING series.id = :idserie");
$queryCapitulos->bindValue(":idserie", $search);
$queryCapitulos->execute();
$capitulosTotales = $queryCapitulos->fetch(PDO::FETCH_ASSOC);
//var_dump($capitulosTotales);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Detalle de la serie:</h1>
    <p><?= $serie["title"] ?>: Cantidad de capitulos <?= $capitulosTotales["episodes"]?></p>

  </body>
</html>
