@extends('layouts.main')

@section('title', 'Cart')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Cart</h1>
    </div>

{{-- ini entar buat foreachnya --}}
@foreach ($cart as $C)
<div class="d-flex justify-content-between">
   
    <p class="p-2"><img src="{{ asset($C->furniture->image) }}" alt=""></p>
    <p class="p-2">{{$C->furniture->name}}</p>
    <p class="p-2">{{$C->furniture->price}}</p>
    <p class="p-2">{{$C->quantity}}</p>
    <p class="p-2">{{$C->furniture->color}}</p>
    
    {{--  --}}
    <form action="/ufurniture/{{$C->furniture_id}}/plus" method = "post">
        {{ csrf_field() }}
        <button type="submit" class="button">+</button>
    </form>
    <form action="/ufurniture/{{$C->furniture_id}}/min" method = "post">
        {{ csrf_field() }}
        <button type="submit" class="button">-</button>
    </form>
    @endforeach
</div>
<div class="mb-3 position-absolute bottom-0 start-50 translate-middle">
    <a href="/checkout"><button type="button" class="button">Proceed To Checkout</button></a>
    

</div>
@endsection