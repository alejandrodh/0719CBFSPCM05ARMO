<?php
include "funciones.php";
$errores = [];
$nombreOk = "";
$emailOk = "";

//si el formulario viene por POST;

if($_POST){

  //tenemos que detectar errores y mostrarlos al usuario.
  $errores = validarRegistro($_POST);

  $nombreOk = trim($_POST["name"]);
  $emailOk = trim($_POST["email"]);

  // Opcional crear if para cada asignación de datos correctos. Solo necesitamos colocar la cariable en el value.
  // if(!isset($errores["email"])){
  //   $emailOk = $_POST["email"];
  // }

  //Si no hay errores;
  if(!$errores){
    // Crear un usuario
    $usuario = armarUsuario();

    //Guardarlo en alguna parte
    guardarUsuario($usuario);

    //Subir la imagen de perfil
    $ext = pathinfo($_FILES["avatar"]['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["avatar"]['tmp_name'], "avatar/".$_POST['email']. "." . $ext );

    //Auto Loguear usuario (Opcional);
    loguearUsuario($_POST['email']);

    //Redirigirlo a página Exito;
    header("Location:index.php");
    exit;
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <a class="btn btn-warning" href="register.php">Signup</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="index.php">Large</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-success" href="login.php">Login</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>

      <div class="row">
        <h3 class="col-md-6 offset-md-3">Signup</h3>
      </div>
      <div class="row">
        <!-- Mostramos la lista de errorores -->
        <?php if($errores):?>
              <ul class="col-md-6 offset-md-3 alert alert-danger">

                <?php foreach ($errores as $error): ?>
                  <li><?= $error  ?></li>
                <?php endforeach ?>

              </ul>
        <?php endif ?>

        <form class="col-md-6 offset-md-3" action="register.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nombre</label>
          <?php if(isset($errores["name"])):?><!--  Si hay errores mostramos el campo input vacío  -->
            <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" value="">
            <span class="small"></span>
          <?php else: ?>
          <input type="text" id="name" class="form-control" placeholder="Nombre" name="name" value="<?= $nombreOk ?>">
          <?php endif ?>
        </div>

        <h6 class="mt-3">Género</h6>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="radio" id="inlineRadio1" value="masc">
          <label class="form-check-label" for="inlineRadio1">Masculino</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="radio" id="inlineRadio2" value="fem">
          <label class="form-check-label" for="inlineRadio2">Femenino</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="gender" type="radio" id="inlineRadio3" value="other">
          <label class="form-check-label" for="inlineRadio3">Prefiero no decirlo</label>
        </div>
        <div class="form-group">
          <span class="small text-danger"></span>
        </div>


        <h6 class="mt-3">Hobbies</h6>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="hobbies[sports]" type="checkbox" id="inlineCheckbox1" value="sports">
          <label class="form-check-label" for="inlineCheckbox1">Deportes</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" name="hobbies[music]" type="checkbox" id="inlineCheckbox2" value="music">
          <label class="form-check-label" for="inlineCheckbox2">Música</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" name="hobbies[programming]" type="checkbox" id="inlineCheckbox3" value="programming">
          <label class="form-check-label" for="inlineCheckbox3">Programación</label>
        </div>
        <div class="form-group">
          <span class="small text-danger"></span>
        </div>


        <div class="form-group">
          <label for="email">email</label>
          <?php if(isset($errores["email"])):?>
            <input type="text" id="email" class="form-control" placeholder="email" name="email" value="">
            <span class="small text-danger"></span>
          <?php else: ?>
             <input type="text" id="email" class="form-control" placeholder="email" name="email" value="<?= $emailOk?>">
           <?php endif?>
        </div>

        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" value="">
          <span class="small text-danger"></span>
        </div>
        <div class="form-group">
          <label for="pass2">Reescribir contraseña</label>
          <input type="password" id="pass2" class="form-control" placeholder="Repita su contraseña" name="pass2" value="">
          <span class="small text-danger"></span>
        </div>

        <div class="form-group">
          <label for="avatar">Imagen de perfil</label>
          <input type="file" id="avatar" class="form-control" name="avatar">
          <span class="small text-danger"></span>
          <small id="emailHelp" class="form-text text-danger">
            <?php if(isset($errores['avatar'])) :?>
              <?= $errores['avatar'] ?>
            <?php endif ?>
          </small>

        </div>

        <button class="btn btn-info" type="submit" >Register</button>
        </form>
      </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
