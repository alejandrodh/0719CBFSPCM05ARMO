@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Detalle del producto</h2>
    <article class="">
      <img src="/storage/products/{{$productDetail->featured_img}}" alt="">
      <div class="">
        <p>Otras fotos</p>
        @forelse ($productDetail->photos()->get() as $photo)
          <img style="width:50px" src="/storage/products/{{$photo->image}}" alt="">
        @empty
          <p>No hay fotos disponibles para este producto.</p>
        @endforelse
      </div>
      <h3>{{$productDetail->name}}</h3>
      <p>{{$productDetail->description}}</p>
      <p>Precio: {{$productDetail->price}}</p>
      <form class="" action="/addtocart" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$productDetail->id}}">
        <button class="btn btn-success" type="submit">Agregar al carrito</a>
      </form>

    </article>
</div>
@endsection
