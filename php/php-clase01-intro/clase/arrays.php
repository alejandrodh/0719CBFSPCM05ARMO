<?php

$superHeroe =[
  "nombre" => "Bruce",
  "superheroe" => "Hulk",
  "powers" => ["smash", "roar", "jump", "fly"],
  "team" => "Avengers"
];

// echo $superHeroe[4];
//echo "<br><br><br>";


$superHeroe["capa"] = true;

//var_dump($superHeroe);


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Lista de Avengers</h1>

     <?php echo $superHeroe["nombre"];
           echo $superHeroe["superheroe"]?>
      <p>Poderes:</p>

      <ul>
        <?php for($i = 0; $i<count($superHeroe["powers"]); $i++){ ?>
            <li class="uno"> <?php echo $superHeroe["powers"][$i] ?> </li>
        <?php } ?>
      </ul>

      <h2>For Each</h2>

      <?php
        foreach ($superHeroe as $posicion => $datos) {

          if($posicion == "powers"){
            echo "<p>Poderes</p>";
            foreach ($superHeroe["powers"] as $poder) {
              echo $poder . "<br>";
            }
          } else {
            echo $datos . "<br>";
          }
          
        }


       ?>



   </body>
 </html>
