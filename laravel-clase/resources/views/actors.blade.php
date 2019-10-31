@extends('master')

@section('title', 'Actores')
@section('h1', "Listado de actores")

@section('main')

    <form class="" action="/actors/buscar" method="get">
      <input type="text" name="search" value="" placeholder="Buscar...">
      <button type="submit">Buscar</button>
    </form>

    <p>
      <a href="/movies">movies</a>
      <a href="/actors">actors</a>
   </p>


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


@endsection
