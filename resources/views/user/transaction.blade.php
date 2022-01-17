@extends('layouts.main')

@section('title', 'Transaction History')

<link rel="stylesheet" type="text/css" href="{{ url('/css/transaction.css') }}" />

@section('headerfooter')

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-center">
            <h1 id="purple">Transaction History</h1>
        </div>



        <div class="container">
            <div class="row justify-content-center pt-3">
                @foreach ($Header as $H)
                    <div class="col-9 border mb-3">
                        <div class="col-6">
                            <table>
                                <tr>
                                    <td>Transaction Id</td>
                                    <td>: {{ $H->id }}</td>
                                </tr>
                                <tr>
                                    <td>Transaction Date</td>
                                    <td>:</td>
                                </tr>
                                <tr>
                                    <td>Method</td>
                                    <td>: {{ $H->method }}</td>
                                </tr>
                                <tr>
                                    <td>Card Number</td>
                                    <td>: {{ $H->card_number }}</td>
                                </tr>
                            </table>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>Furniture's Name</td>
                                    <td>Furniture's Price</td>
                                    <td>Quantity</td>
                                    <td>Total Price For Each Furniture</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail as $details)
                                    {{-- foreach kalo masih ada niatnya --}}
                                    <tr>
                                        <td>{{ $details->furniture->name }}</td>
                                        <td>{{ $details->furniture->price }}</td>
                                        <td>{{ $details->quantity }}</td>
                                        <td>Rp. {{ $details->furniture->price * $details->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
                {{-- foreach tiap transaksi disni --}}

                {{-- end foreach smua furniture di cart --}}
                <tr>
                    <td class="text-center " colspan="3">Total Price : </td>
                    <td>IDR.
                        {{ $H->detail->sum(function ($a) {
                            return $a->quantity * $a->furniture->price;
                        }) }}
                    </td>
                </tr>

            </div>

            {{-- end foreach transaksi disini --}}



        </div>
    </div>


@endsection
