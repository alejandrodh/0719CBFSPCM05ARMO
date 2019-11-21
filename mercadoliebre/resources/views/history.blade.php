@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Mis compras</h2>
    @forelse ($carts as $cart_number => $cart)
      <p>Carrito nº: {{$cart_number}}</p>
      <ul>
      @forelse ($cart as $item)
        <li>Producto: {{$item->name}}</li>
      @empty
        <p>No hay productos para este carrito.</p>
      @endforelse
      </ul>
    @empty
      <p>No hay compras.</p>
    @endforelse


</div>
@endsection
