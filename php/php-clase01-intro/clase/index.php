<?php
$ginobili = [
  "nombre" => "Emanuel David",
  "apellido" => "Ginobili",
  "apodo" => "Manu",
  "altura" => 1.98,
  "peso" => 93,
  "equipos" => [
    "Andino Sport Club",
    "Estudiantes de Bahía Blanca",
    "Viola Reggio Calabria",
    "edad" => 40,
    "Kinder Bolonia",
    "San Antonio Spurs",
    "River Plate",
    "San Antonio",

  ]
];

$nombre = $ginobili["nombre"];
var_dump($ginobili, $ginobili["equipos"][4]);

foreach ($ginobili["equipos"] as $value) {
  echo $value ."<br>";
}

$a = 23;
$b = 58;

$max = $a>$b ? false: true;
var_dump($max);

echo $max . "<br><br><br><br><br>";

?>

<p>Jugador: <span><?php echo $ginobili["nombre"]?></span></p>
<p>Altura: <?php echo $ginobili["altura"]?></p>
<p>Peso: <?php echo $ginobili["peso"]?></p>

<p> Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.</p>

<?php
$num = rand(1,5);
if($num==3 || $num == 5){
  echo "El número es: " . $num;
}

?>

<p>
3. Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.</p>
 <?php

 if($num != 3){
   echo "El número no es 3. Es: " . $num;
 } else {
   echo "Es 3: ";
 }
