@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Detalle del producto</h2>
        <section class="">
          <article class="">
            <img src="/storage/products/{{$productDetail->featured_img}}" alt="">
            <h3>{{$productDetail->name}}</h3>
            <p>{{$productDetail->description}}</p>
            <p>Precio: {{$productDetail->price}}</p>
            <a href="" class="btn btn-success">Agregar al carrito</a>
          </article>
        </section>
    </div>
</div>
@endsection
