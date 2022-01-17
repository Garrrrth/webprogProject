@extends('layouts.main')

@section('title', 'Checkout')

@section('headerfooter')

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-center">
            <h1 id="purple">Checkout</h1>
        </div>

        {{-- ini entar buat foreachnya --}}

        @foreach ($cart as $C)
            <div class="row justify-content-center pb-3">
                <div class="col-2"><img src="{{ asset($C->furniture->image) }}" class="resize"
                        alt="Furniture"></div>
                <div class="col-1">{{ $C->furniture->name }}</div>
                <div class="col-1">{{ $C->furniture->price }}</div>
                <div class="col-1">{{ $C->quantity }}</div>
                <div class="col-1">{{ $C->furniture->color }}</div>



                <form action="/checkout" method="post">
                    {{ csrf_field() }}
                    <div class="container">

                        <div class="row justify-content-center pb-3">
                            <div class="col-4">
                                <div class="form-check">
                                    <input class="Payment" type="radio" name="Payment" id="Payment" value="Credit"
                                        checked>
                                    Credit
                                </div>
                                <div class="form-check">
                                    <input class="Payment" type="radio" name="Payment" id="Payment" value="Debit">
                                    Debit
                                </div>
                            </div>


                        </div>
                        <div class="row justify-content-center pb-3">
                            <div class="col-6"><label for="Card">Credit Card Number:</label>
                                <input type="text" name="Card" placeholder="Enter Credit Card Number">
                            </div>

                        </div>

                        {{-- di tombol checkout direct ke home abis kelar, hrusnya ad msg sukses tpi js mager --}}

                        <div class="row justify-content-center pb-3">
                            <button type="submit" class="button">Checkout</button> 
                        </div>



                    </div>
                </form>

            </div>


        @endforeach
    @endsection
