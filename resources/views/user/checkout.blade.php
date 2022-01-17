@extends('layouts.main')

@section('title', 'Checkout')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Cart</h1>
    </div>

{{-- ini entar buat foreachnya --}}
@foreach ($header as $D)
<div class="d-flex justify-content-between">
    <p class="p-2"><img src="{{ asset($D->details->furniture->image) }}" alt=""></p>
    <p class="p-2">{{$D->details->furniture->name}}</p>
    <p class="p-2">{{$D->details->furniture->price}}</p>
    <p class="p-2">{{$D->details->quantity}}</p>
    <p class="p-2">{{$D->details->furniture->color}}</p>
</div>
@endforeach


<form action="/bayar/{{}}">
    <div class="d-flex justify-content-center"> 
    
        <div class="d-flex justify-content-center">
    
            <div class="form-check">
                <input class="Payment" type="radio" name="Payment" id="Payment" value="Credit" checked>
                    Credit
            </div>
            <div class="form-check">
                <input class="Payment" type="radio" name="Payment" id="Payment" value="Debit">
                    Debit
            </div>
        </div>
        <label for="Card">Credit Card Number:</label>
        <input type="text" name="Card" placeholder="Enter Credit Card Number">
    
    </div>
    <div class="mb-3 position-absolute bottom-0 start-50 translate-middle">
        <a href="#"><button type="button" class="button">Proceed To Checkout</button></a>
        
    
    </div>
</form>

@endsection