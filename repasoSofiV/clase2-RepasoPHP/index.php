<!--
Protocolo HTTP: GET/ POST **Próxima clase**
PHP: $_GET / $_POST : las 2 son arrays asociativos.
$_GET: se rellena con datos que vienen de una querystring. www.digitalhouse.com/cursos?id=5&year=2019
$_POST: únicamente con un formulario.



- Validaciones **Próxima clase**

 -->

<?php
  session_start();
  echo 'Variable $_SESSION' . "<br>";
  var_dump($_SESSION) . "<br><br>";


  echo 'Variable $_GET' . "<br>";
  var_dump($_GET) . "<br><br>";

  echo "<br>" .'Variable $_POST' . "<br>";
  var_dump($_POST). "<br><br>";

  echo "<br>" .'Variable $_FILES' . "<br>";
  var_dump($_FILES). "<br><br>";

  function validarRegistro($datos){ //$datos va a tener que ser un array. Va a ser $_POST
    $errores = [];

    if(strlen($datos["email"]) == 0){
      //dar al usuario un error.
      $errores["email"] = "El email no puede estar vacío.";
    } else if(filter_var($datos["email"],FILTER_VALIDATE_EMAIL) == false){
      //dar al usuario un error.
      $errores["email"] = "El email no tiene formato válido.";
    }

    if(strlen($datos["password"]) == 0){
      //dar al usuario un error.
      $errores["password"] = "La contraseña no puede estar vacía.";
    }

  return $errores;
  }
  echo "<br>";
  if($_POST){
    $mostrarErrores = validarRegistro($_POST);
    var_dump($mostrarErrores);
  }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Repaso GET/ POST</h1>
    <?php //echo $_GET["producto_id"]?>
    <form class="" action="index.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" value="">
      </div>
      <div class="form-group">
        <label for="password">contraseña</label>
        <input type="password" name="password" value="">
      </div>
        <input type="file" name="avatar" value="">
        <button type="submit" name="">Enviar</button>
    </form>
  </body>
</html>
