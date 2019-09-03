<?php
function validarRegistro($datos){
  $errores = [];
  $datosFinales = [];

  // Limpia espacios al cominenzo y la final de cada campo.
  foreach ($datos as $key => $value) {
    //¿Cuándo no debe trimear?
    $datosFinales[$key] = trim($value);
  }

  //Validaciones
  //=====================

  //Nombre
  if(strlen($datosFinales["name"]) == 0){
    $errores["name"] = "El campo nombre debe estar completo";
  } else if (!ctype_alpha($datosFinales["name"])){
    $errores["name"] = "Por favor ingrese caracteres alfabéticos";
  } //Validar con expresion regular que permita espacios intermedios.

  //Email
  if(strlen($datosFinales["email"]) == 0){
    $errores["email"] = "El campo email debe estar completo";
  } else if(!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "Por favor ingrese un email con formato válido";
  }

  //Password
  if(strlen($datosFinales["pass"]) < 4){
    $errores["pass"] = "La contraseña debe tener al menos 4 caracteres";
  }

  //retype Password
  if(strlen($datosFinales["pass2"]) === 0){
    $errores["pass2"] = "El campo no puede estar vacío.";
  } else if($datosFinales["pass"] !== $datosFinales["pass2"]){
    $errores["pass2"] = "Las contraseñas no coiniceden";
  }

  return $errores;
}
