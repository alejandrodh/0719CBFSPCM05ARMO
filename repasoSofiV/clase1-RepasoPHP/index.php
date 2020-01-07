<?php
//Variables.
$strings = "Una cadena de texto";
$boolean = false; //o true.
$numero = 1234; //Number.
$float = 1234.90; //Float (Números con decimales).
$arrayNumerico = [
          1,
          "hola",
          $boolean,
          987,
          "jhghjk",
          9876,
          4567,
          "hgfghuihj"
          //[]
        ]; //Array numérico.
$arrayNumericoMostrandoPosicion = [
      0 => 1,
      1 => "hola",
      2 => $boolean,
      3 => []
    ]; //Array numérico explicitando la posición.

$arrayAsociativo = [
  "nombre" => "Sofía",
  "apellido" => "Vera",
  "curso" => "FullStack",
  "año" => "2019",
];

//Imprimiendo datos de varianles:
echo $strings . "<br>";
echo $float . "<br>";
//echo $arrayNumerico . "<br>";//Va a dar error porque echo no puede recorrer un array.
echo $arrayNumerico[0] . "<br>"; //Va a dar ok porque echo SI puede ver una posición específica del array.

//Estructuras de control
echo "<h3>Estructuras de Control</h3>";
if(/* Si sucede esta condición*/
  $numero == 123498765){
  //Ejecuto este código.
  echo "El número es 1234" . "<br>";
} else {
  echo "El número NO ES 1234" . "<br>";
}
//Si la condición es falsa entonces sigo con esta línea
echo "Ya pasamos el if" . "<br>";

echo "<h3>Bucle for repitiendo</h3>";
//Bucles: nos permiten repetir código.
for ($i=0; $i < 5; $i++) {
  echo "Hola Ale" . "<br>";
}

echo "<h3>Bucle for recorriendo array</h3>";
for($i=0; $i<count($arrayNumerico); $i++){
  echo $arrayNumerico[$i] . "<br>";
}

echo "<h3>Bucle foreach</h3>";
foreach ($arrayAsociativo as $lugar => $dato) {
  echo "En el lugar $lugar: está el valor $dato" . "<br>";
  //echo "Hola Sofi";
}

echo "<h3>Bucle foreach sin datos de la clave</h3>";
foreach ($arrayNumerico as $dato) {
  echo "Está el valor $dato" . "<br>";
}


//Funciones
echo "<h3>Funciones</h3>";

function saludar($nombre){
  if($nombre == "Sofi"){
    return "Saludamos a $nombre";
  } else {
    return "No sos Sofi, rajá de acá.";
  }

}











?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <hr>
    <?php //Escribirt código
    echo "<p>Estamos dentro del html</p>"; ?>
    <p>Ejecutamos la función saludar</p>
    <?php echo saludar("Ale") ?>

  </body>









</html>
