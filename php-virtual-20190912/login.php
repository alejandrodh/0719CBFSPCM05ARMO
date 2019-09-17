<?php
// Camino de login
//===========================
// 1) Chequear que el formulario este cargando por POST.
// 2) Validar los datos del formulario.
//  2.1) Si el formulario no valida vamos a mostrar los errores al usuario.
// 3) Si no hay $errores:
//  3.1) loguear al usuario
//  3.2) Redirigirlo a home y mostrar algun cambio en home para que identique que está logueado.
//  3.3) Armar logout.

include "functions.php";

if($_POST){
  $errores = validarLogin($_POST);

  if(!$errores){
    loguearUsuario($_POST['email']);

    header("Location:index.php");
    exit;
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

    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="col-md-4 offset-md-4">Ingresar</h1>
        <form class="col-md-4 offset-md-4" action="login.php" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">
            <label for="rememberMe" class="form-check-label">Recordarme</label>
          </div>
          <button type="submit" class="btn btn-primary">Ingresar</button>
          <a class="float-right " href="register.php">Registarse</a>
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
