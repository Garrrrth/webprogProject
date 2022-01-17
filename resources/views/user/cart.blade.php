@extends('layouts.main')

@section('title', 'Cart')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Cart</h1>
    </div>

{{-- ini entar buat foreachnya --}}

<div class="d-flex justify-content-between">
    @foreach ($cart as $C)
    <p class="p-2"><img src="{{ asset($C->furniture->image) }}" alt=""></p>
    <p class="p-2">{{$C->furniture->name}}</p>
    <p class="p-2">{{$C->furniture->price}}</p>
    <p class="p-2">{{$C->furniture->quantity}}</p>
    <p class="p-2">{{$C->furniture->colour}}</p>
    @endforeach
    {{--  --}}
    <a href="#"><button type="button" class="button">+</button></a>
    <a href="#"><button type="button" class="button">-</button></a>
</div>
<div class="mb-3 position-absolute bottom-0 start-50 translate-middle">
    <a href="/checkout"><button type="button" class="button">Proceed To Checkout</button></a>
    

</div>
@endsection