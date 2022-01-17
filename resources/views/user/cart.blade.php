@extends('layouts.main')

@section('title', 'Cart')

@section('headerfooter')

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-center">
            <h1 id="purple">Cart</h1>
        </div>
        <div class="container">
            {{-- ini entar buat foreachnya --}}
            @foreach ($cart as $C)
                <div class="row justify-content-center pb-3">
                    <div class="col-2"><img src="{{ asset($C->furniture->image) }}" class="resize"
                            alt="Furniture"></div>
                    <div class="col-1">{{ $C->furniture->name }}</div>
                    <div class="col-1">{{ $C->furniture->price }}</div>
                    <div class="col-1">{{ $C->quantity }}</div>
                    <div class="col-1">{{ $C->furniture->color }}</div>


                    {{--  --}}
                    <div class="col-2">
                        <form action="/ufurniture/{{ $C->furniture_id }}/plus" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="button">+</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="/ufurniture/{{ $C->furniture_id }}/min" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="button">-</button>
                        </form>
                    </div>
                </div>
                </form>
            @endforeach

            <div class="row justify-content-center pb-3">
                <div class="col">
            <a href="/checkout"><button type="submit" class="button">Proceed To Checkout</button></a>
             </div>
            </div>
        </div>

    @endsection
