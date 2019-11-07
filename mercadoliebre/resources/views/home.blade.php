@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2>Listado de productos</h2>
        <section class="">
          @forelse ($products as $product)
            <article class="">
              <img src="/storage/products/{{$product->featured_img}}" alt="">
              <h3>{{$product->name}}</h3>
              <p>{{$product->description}}</p>
              <p>Precio: {{$product->price}}</p>
              <a href="/product/{{$product->id}}" class="btn btn-success">Ver más</a>
            </article>
          @empty
            <p>No hay productos disponibles.</p>
          @endforelse
        </section>
    </div>
</div>
@endsection
