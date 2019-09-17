<?php
//Funciones clase virtual 2019 09 12
session_start();

function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];

  foreach ($datos as $key => $value) {
    if( $key=="userName" || $key == "email"){
    $datosFinales[$key] = trim($value);
    } else {
      $datosFinales[$key] = $value;
    }
  }

  //Validar userName
  if( strlen($datosFinales["userName"])==0 ){
    $errores["userName"] = "El campo es obligatorio.";
  }

  //Validar email
  if( strlen($datosFinales["email"]) == 0){
    $errores["email"] = "El campo es obligatorio";
  } else if( !filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) ){
    $errores["email"] = "Por favor ingrese un email con formato válido.";
  } /*else if( existeUsuario($datos["email"]) ){ //Tenemos que definiri la función existeUsuario.
    $errores["email"] = "El email ingresado ya existe. Por favor elija otro"
  } */

  // Validar longitud de la contraseña y que coincidan
  if(strlen($datosFinales["password"]) == 0){
    $errores["password"] = "El campo es obligatorio";
  } else if($datosFinales["password"]<4){
    $errores["password"] = "Por favor ingrese una contraseña de al menos 4 dígitos";
  }

  if(strlen($datosFinales["retypePassword"]) == 0){
    $errores["retypePassword"] = "El campo es obligatorio";
  } else if($datosFinales["password"] !== $datosFinales["retypePassword"]){
    $errores["retypePassword"] = "Las contraseñas no coinciden";
  }

  //Validar tyc
  if(!isset($datosFinales["tyc"])){
    $errores["tyc"] = "Por favor acepte los términos y condiciones.";
  }

  return $errores;

}

function nextId(){
 $json = file_get_contents("db.json");
 $array = json_decode($json, true);
 //Buscar el último id de usuario.
 $lastUser = array_pop($array['usuarios']);
 $lastId = $lastUser['id'];

 return $lastId + 1;

}

function armarUsuario(){
  return $usuario = [
    "id" => nextId(),
    "userName" => trim($_POST['userName']),
    "email" => trim($_POST['email']),
    "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
    "tyc" => $_POST['tyc']
  ];
}

function guardarUsuario($user){
  //Guardar un usuario en un archivo de texto.
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $array['usuarios'][] = $user;

  $json = json_encode($array,JSON_PRETTY_PRINT);
  file_put_contents("db.json", $json);
}

function buscarUsuarioPorMail($email){
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  foreach ($array['usuarios'] as $usuario) {
    if($usuario['email'] === $email){
      return $usuario;
    }
  }
  return null;
}

 function existeUsuario($email){
   return buscarUsuarioPorMail($email) !== null;
 }

// Validaciones de Login
function validarLogin($datos){
  $errores = [];
  //Validar que el campo venga completo y que el mail exista.
  //1) Buscar el mail dentro del archivo json.
  //2) ¿Existe el usuario? true/ false
  if(strlen($datos['email']) == 0){
    $errores['login'] = "El campo email es obligatorio.";
  } else if(!existeUsuario($datos['email'])){
    $errores['login'] = "El usuario o contraseña son incorrectos.";
  }
  //Validar el campo esté completo y que la contraseña se correcta.
  if(strlen($datos['password']) == 0){
    $errores['login'] = "El campo email es obligatorio.";
  } else if(existeUsuario($datos['email'])){
      $usuario = buscarUsuarioPorMail($datos['email']);
      if(!password_verify($datos['password'], $usuario['password'])){
        $errores['login'] = "El usuario o contraseña son incorrectos.";
      }
  }

  return $errores;
}

function loguearUsuario($email){
  $_SESSION['email'] = $email;
}

function usuarioLogueado(){
  return isset($_SESSION['email']);
}



















?>
