<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de actores</h1>

    <form class="" action="/actores/buscar" method="get">
      <input type="text" name="search" value="" placeholder="Ingerese el nombre a buscar">
      <button type="submit">Buscar</button>
    </form>

    <ul>
      @forelse ($actores as $actor)
        {{-- <li>{{$actor->first_name}} {{$actor->last_name}}</li> --}}
        <li> <a href="/actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a> </li>
      @empty
        <p>No hay actores disponibles.</p>
      @endforelse

    </ul>

    @if (isset($_GET['search']))
      {{$actores->links()}}
    @else
      {{-- {{$actores->links()}} Solo cuando paginamos la lista completa desde el método @directory--}}
    @endif

  </body>
</html>
