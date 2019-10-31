@extends('master')

@section('title', 'Actores')
@section('h1', "Datos del actor")

@section('main')
    <p>id: {{$actor->id}}</p>
    <p>Nombre {{$actor->getNombreCompleto()}}</p>
    <p>Rating: {{$actor->rating}}</p>

    <p> <a href="/actors">Volver</a> </p>

@endsection
  </body>
</html>
