<!-- 4 Armar un buscador de SERIES o PELICULAS, el mismo archivo debe servir para
buscar cualquier de las dos opciónes, por ejemplo a través de un radio-button,
preguntar al usuario qué desea buscar y luego de eso, realizar la consulta a la DB.
Generar errores si no se seleccionó el tipo de búsqueda y así mismo si la busqueda
no arrojo resultados -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="resultados.php" method="get">
      <div class="form-group">
        <input type="text" name="search" value="" placeholder="Buscar">
      </div>
      <div class="form-group">
        <input type="radio" name="type" value="movies">Peliculas
        <input type="radio" name="type" value="series">Series
      </div>

      <button type="submit">Buscar</button>

    </form>

  </body>
</html>
