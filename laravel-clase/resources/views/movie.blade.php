@extends('master')

@section('title', 'Movie')
@section('h1', "Detalles de una película")

@section('main')

      @isset($pelicula)
        <p>Usted esta viendo el la película: <strong>{{$pelicula->title}}</strong></p>
          <img src="/storage/img/{{$pelicula->image}}" alt="">
      @endisset
      @empty ($pelicula)
          <p>No hay datos para esta película.</p>
      @endempty

      <p> <a href="/actors">Volver</a> </p>

@endsection
