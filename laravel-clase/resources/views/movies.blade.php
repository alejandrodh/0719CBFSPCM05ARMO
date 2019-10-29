@extends('master')

@section('title', 'Home')

@section('main')
      <h1>Home de mi proyecto Laravel 5.8</h1>

      @isset($id)
        <p>Usted esta viendo el producto: {{$id}}<strong>
      @endisset
      @empty ($id)
          <p>No hay productos para ese id.</p>
      @endempty


       </strong></p>

      <p>Esto es un párrafo</p>

      <h3>Lista de películas</h3>
      <ul>
        @foreach($peliculas as $pelicula)
          @if($pelicula->title !== "The Mule")
            <li> <a href="/movies/{{$pelicula->id}}">{{ $pelicula->title }}</a>
              </li>
          @endif
        @endforeach
      </ul>

      <h3>Lista con Forelse</h3>

      @forelse ($peliculas as $pelicula)
        @if($pelicula->title !== "The Mule")
          <li>{{ $pelicula->title }}</li>
        @endif

      @empty
        <p>La lista no tiene películas</p>
      @endforelse


@endsection
