<?php

function saludar($nombre, $apellido="no pasaron parámetro"){
  return "hola $nombre $apellido";
}

$saludo = saludar("Karly", "Salama");
echo $saludo;


// $horaActual= date("H:i");
// echo $horaActual;
// exit;
$horaActual= date("H:i");
$horaDespertar = "7:00";

function despertador($hora1, $hora2){
    if($hora1 == $hora2){
    return "bip bip";
  }else{
    return "seguir durmiendo.";
  }
}

$medespierto = despertador($horaActual, $horaDespertar);

function hacerCafe($estarDespierto){
  if($estarDespierto == true){
    return "hacer cafe";
  }
}
echo "<br> Resultado Global antes";
 $resultado = 1000;
 echo $resultado;
 echo "<br>";

function sumar($num1, $num2){
  global $resultado;
  $resultado = $resultado + $num1 + $num2;
  return $resultado;
}

echo sumar("hola",4);
echo "<br>";
echo sumar(1,3);
echo "<br>";
echo sumar(1,5);
echo "<br> Resultado Global después";
echo $resultado;


echo "<br><br>" ;

$foo = "0123456789a123456789b123456789c";

echo $foo;
// Looking for '0' from the 0th byte (from the beginning)
var_dump(strrpos($foo, '0', 0));

// Looking for '0' from the 1st byte (after byte "0")
var_dump(strrpos($foo, '0', 1));

// Looking for '7' from the 21th byte (after byte 20)
var_dump(strrpos($foo, '7', 20));

// Looking for '7' from the 29th byte (after byte 28)
var_dump(strrpos($foo, '7', 28));

// Looking for '7' right to left from the 5th byte from the end
var_dump(strrpos($foo, '7', -5));
echo "strrpos($foo, '7', -5))";

// Looking for 'c' right to left from the 2nd byte from the end
var_dump(strrpos($foo, 'c', -2));

// Looking for '9c' right to left from the 2nd byte from the end
var_dump(strrpos($foo, '9c', -2));
?>
