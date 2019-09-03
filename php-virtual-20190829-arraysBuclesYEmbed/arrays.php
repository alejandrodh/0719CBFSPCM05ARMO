<?php
$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

$ceu2 = [
        "Argentina" => [
          "ciudades" =>["Buenos Aires", "Córdoba", "Santa Fé"],
          "americano" =>true
        ],
        "Brasil" => [
          "ciudades"=>["Brasilia", "Rio de Janeiro", "Sao Pablo"],
          "americano" =>true
        ],
        "Colombia" => [
          "ciudades"=>["Cartagena", "Bogota", "Barranquilla"],
          "americano"=>true
        ],
        "Francia" => [
          "ciudades"=>["Paris", "Nantes", "Lyon"],
          "americano"=>false
        ],
        "Italia" => [
          "ciudades"=>["Roma", "Milan", "Venecia"],
          "americano"=>false
        ],
        "Alemania" => [
          "ciudades"=>["Munich", "Berlin", "Frankfurt"],
          "americano"=>false
        ]
      ];

    // var_dump($ceu2["Argentina"]["ciudades"][0]);
    // exit;

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrays</title>
  </head>
  <body>
    <h1>Arrays</h1>
    <p>Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.</p>

    <ul>
    <?php foreach ($ceu as $pais => $capital) {?>
      <li>Capital: <?php echo $capital ?>. Pais: <?php echo $pais ?></li>
    <?php } ?>
    </ul>

    <p>Imprimir los paises con sus ciudades</p>
    <ul>
      <li>Argentina</li>
          <ul>
            <li>ciudad 1</li>
            <li>ciudad 2</li>
          </ul>
      <li>Italia</li>
    </ul>
    <p>Creado con foreach</p>
    <ul>
      <?php foreach ($ceu2 as $pais => $arrayDatos) { ?>

        <?php if ($arrayDatos["americano"]) {?>
          <li><?php echo $pais ?></li>
            <ul>
            <?php foreach ($arrayDatos["ciudades"] as $ciudad) {?>
              <li><?php echo $ciudad ?></li>
            <?php }?>
            </ul>
        <?php } ?>

      <?php }?>
    </ul>









  </body>
</html>
