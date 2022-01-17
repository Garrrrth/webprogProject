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
  
    {{-- foreach tiap transaksi disni --}}
   <div class="col-9 border mb-3">
      <div class="col-6">
          <table>
              <tr>
                  <td>Transaction Id</td><td>: #</td>
              </tr>
              <tr>
                  <td>Transaction Date</td><td>: #</td>
              </tr>
              <tr>
                <td>Method</td><td>: #</td>
            </tr>
              <tr>
                  <td>Card Number</td><td>: sensorangka-sisain4belakang</td>
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
           {{-- foreach kalo masih ada niatnya --}}
          <tr>
              <td>nama</td>
              <td>harga</td>
              <td>kuantitas</td>
              <td>harga x kuantitas</td>
          </tr>
          {{-- end foreach smua furniture di cart --}}
          <tr>
              <td class="text-center "colspan="3">Total Price : </td>
              <td>disini angka total</td>
          </tr>
      </tbody>
      </table>
   </div>

   {{-- end foreach transaksi disini --}}
 


  </div>
</div>


@endsection