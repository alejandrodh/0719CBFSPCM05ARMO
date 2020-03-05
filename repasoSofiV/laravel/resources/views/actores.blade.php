<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de Actores</h1>
    <p> lista aramada con sintaxis de php </p>
    <ul>
      <?php foreach ($actores as $actor) :?>
          <li><?= $actor->first_name ?>, <?= $actor->last_name ?></li>
      <?php endforeach?>

    </ul>

    {{-- ul escrito con balde --}}
    <p> lista aramada con sintaxis Blade </p>
    <ul>
      @foreach ($actores as $actor)
        <li> {{ $actor->first_name }} ,  {{ $actor->last_name }} </li>
      @endforeach

    </ul>

    <p> lista aramada con sintaxis Blade y forelse</p>
    <ul>
      {{-- @php
        $actores = [];
      @endphp --}}
      @forelse ($actores as $actor)
        <li> {{ $actor->first_name }} ,  {{ $actor->last_name }} </li>
      @empty
        <p> La lista no tiene actores registrados </p>
      @endforelse

    </ul>




  </body>
</html>
