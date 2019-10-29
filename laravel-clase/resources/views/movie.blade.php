@extends('master')

@section('title', 'Movie')

@section('main')
      <h1>Home de mi proyecto Laravel 5.8</h1>

      @isset($pelicula)
        <p>Usted esta viendo el la película: {{$pelicula->title}}<strong>
      @endisset
      @empty ($pelicula)
          <p>No hay datos para esta película.</p>
      @endempty


@endsection
