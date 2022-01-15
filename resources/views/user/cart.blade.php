@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Cart</h1>
    </div>

{{-- ini entar buat foreachnya --}}

<div class="d-flex justify-content-between">
    <p class="p-2">Ini buat image</p>
    <p class="p-2">Name</p>
    <p class="p-2">Price</p>
    <p class="p-2">Type</p>
    <p class="p-2">Colour</p>
    <a href="#"><button type="button" class="button">+</button></a>
    <a href="#"><button type="button" class="button">-</button></a>
</div>
<div class="mb-3 position-absolute bottom-0 start-50 translate-middle">
    <a href="#"><button type="button" class="button">Proceed To Checkout</button></a>
    

</div>
@endsection