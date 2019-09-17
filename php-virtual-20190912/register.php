<?php
  // Camino de la registración.
  //===========================
  // 1) Chequear que el formulario este cargando por POST.
  // 2) Validar los datos del formualario.
  //  2.1) Si el formulario no valida vamos a mostrar los errores al usuario.
  //  2.2) Persistir para el usuario los datos que si completo correctamente.
  // 3) Si no hay $errores:
  //  3.1) Crear al usario
  //  3.2) Guardar su imagen de perfil
  //  3.3) Redirigir al usuario a la página de inicio.

  include "functions.php";
  $userNameOk = "";
  $emailOk = "";

  if ($_POST){
    $errores = validarRegistro($_POST);

    $userNameOk = $_POST['userName'];
    $emailOk = $_POST['email'];

    if(!$errores){
      $usuario = armarUsuario();
      guardarUsuario($usuario);

      //Guardar imagen de perfil del usuario.
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/" . $usuario["id"] . "." . $ext); //La carpeta de destino debe existir. Si no existe php no la crea y la imagen no subirá.
      //Chequear que la carpeta tenga permisos totales para que php pueda escirbir dentro.

      header("Location:index.php"); //Redirecciona al destino de las comillas.
      exit; //Colocarlo siempre despues de una redireccion.

    }

  }



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-md-4 offset-md-4">Registrate</h1>
        <form class="col-md-4 offset-md-4" action="register.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="userName">User name</label>
            <?php if(!isset($errores['userName'])): ?>
                <input type="text" id="userName" class="form-control" name="userName" placeholder="Enter User name" value="<?= $userNameOk ?>">
            <?php else: ?>
                <input type="text" id="userName" class="form-control" name="userName" placeholder="Enter User name" value="">
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores["userName"])): ?>
                <?= $errores["userName"]  ?>
              <?php endif?>
            </small>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <?php if(!isset($errores['email'])):?>
              <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="<?= $emailOk ?>">
            <?php else: ?>
              <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="">
            <?php endif ?>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores["email"])): ?>
                <?= $errores["email"]  ?>
              <?php endif?>
            </small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" value="">
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores["password"])): ?>
                <?= $errores["password"]  ?>
              <?php endif?>
            </small>
          </div>
          <div class="form-group">
            <label for="retypePassword">Retype password</label>
            <input type="password" id="retypePassword" class="form-control" name="retypePassword" placeholder="Retype password" value="">
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores["retypePassword"])): ?>
                <?= $errores["retypePassword"]  ?>
              <?php endif?>
            </small>
          </div>
          <div class="form-group">
            <label for="avatar">Imagen de perfil</label>
            <input name="avatar" type="file" id="avatar" class="form-control-file">
          </div>
          <div class="form-group form-check">
            <?php if(!isset($_POST['tyc'])):?>
              <input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc">
            <?php else: ?>
              <input type="checkbox" class="form-check-input" name="tyc" id="tyc" value="tyc" checked>
            <?php endif ?>
            <label for="tyc" class="form-check-label">Acepto los términos y condiciones.</label>
            <small id="emailHelp" class="form-text text-danger">
              <?php if(isset($errores["tyc"])): ?>
                <?= $errores["tyc"] ?>
              <?php endif?>
            </small>
          </div>
          <button type="submit" class="btn btn-primary">Registrate</button>
        </form>
      </div>
    </div>


    <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
