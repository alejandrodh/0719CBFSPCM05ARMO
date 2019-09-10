<?php

//Array a json con jsonDecode. Recuperamos de json a array
// json_decode TRUe

//file_put_contents($archivo, $data, FILE_APPEND);
//file_get_contents()
//1ro crear el file!

var_dump($_FILES, $_POST);

if($_POST){
  //Guardar imagen
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    // var_dump($ext);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/avatar");

  $hash = password_hash($_POST["pass"], PASSWORD_DEFAULT);
  $okPass = password_verify("123", $hash);
  var_dump($_POST["pass"], $hash, $okPass);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>formulario</h1>

    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="text" name="name" value="" placeholder="name">
      <input type="password" name="pass" value="" placeholder="password">
      <input type="file" name="avatar" value="">

      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
