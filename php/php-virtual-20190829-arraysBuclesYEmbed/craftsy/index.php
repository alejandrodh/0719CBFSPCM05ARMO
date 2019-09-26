<?php
  $products = [
    0 => [
      "img" =>"img-phone-01.jpg",
      "title" => "Nombre del producto",
      "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu.",
      "precio"=>10000,
      "oferta"=>false,
    ],
    1 => [
      "img" =>"img-phone-02.jpg",
      "title" => "Nombre del producto",
      "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu.",
      "precio"=>12000,
      "oferta"=>true,
    ],
    2 => [
      "img" =>"img-phone-03.jpg",
      "title" => "Nombre del producto",
      "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu.",
      "precio"=>12500,
      "oferta"=>false,
    ],
    4 => [
      "img" =>"img-phone-01.jpg",
      "title" => "Nombre del producto",
      "description"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididu.",
      "precio"=>9200,
      "oferta"=>false,
    ],
  ]

?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <?php include "head.php"?>
  <body>
    <?php include "navigation.php"?>
    <div class="container">
      <main> <!-- Contenedor de prodcutos -->
        <?php foreach ($products as $product):?>
          <article class="product"> <!-- producto -->
            <img src="./img/<?= $product['img']?>" alt="">
            <h2><?= $product['title'] ?></h2>
            <p><?= $product['description'] ?></p>
            <p> Precio: $<?= $product["precio"]  ?></p>
            <?php if ($product["oferta"]): ?>
              <p>Oferta 20% de descuento.</p>
            <?php endif; ?>
            <a class="more" href="#">ver más</a>
          </article>
        <?php endforeach ?>
      </main>
      <aside class="right-col"> <!-- Barra lateral -->
        <h2>Tutoriales</h2> <!-- title -->
        <section class="sevice-container right-col-inner"> <!-- sección -->
          <article class="service">
            <img src="./img/aside-01.jpg" alt="servicio uno">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </article>
          <article class="service">
            <img src="./img/aside-02.jpg" alt="servicio dos">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </article>
          <article class="service">
            <img src="./img/aside-03.jpg" alt="servicio tres">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </article>
          <article class="service">
            <img src="./img/aside-04.jpg" alt="cuatro">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </article>
        </section>
        <h2>Title de sección</h2>
        <section class="ads right-col-inner">
          <img src="./img/ad-01.jpg" alt="publicidad 1">
          <img src="./img/ad-02.jpg" alt="pulicidad 2">
        </section>
      </aside>
    </div>
  </body>
</html>
