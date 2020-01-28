<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de Actores</h1>
    <ul>
      <?php foreach ($actores as $actor) :?>
          <li><?= $actor->first_name ?>, <?= $actor->last_name ?></li>
      <?php endforeach?>

    </ul>



  </body>
</html>
