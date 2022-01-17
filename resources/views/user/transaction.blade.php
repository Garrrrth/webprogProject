@extends('layouts.main')

@section('title', 'Transaction History')

<link rel="stylesheet" type="text/css" href="{{ url('/css/transaction.css') }}" /> 

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Transaction History</h1>
    </div>

{{-- ini entar buat foreachnya --}}
<table>
    <tr><td>Transaction Id : #</td></tr>
    <tr><td>Transaction Date : </td><td>Tanggalnya</td></tr>
    <tr><td>Method : </td><td>Metodenya</td></tr>
    <tr><td>Card Number : </td><td>sensor-ambil4dibelakang</td></tr>
    <tr><td>
<table class="table">
    <thead>
      <tr>
        <th> Furniture's Name</th>
        <th> Furniture's Price</th>
        <th> Quantity </th>
        <th> Total Price For Each Furniture </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Nama</th>
        <td>Harga</td>
        <td>kuantitas</td>
        <td>total harga x kuantitas</td>
      </tr>
      <tr>
        <th>Total Price</th>
        <th> </th>
        <th> </th>
        <th>disini angka</th>
      </tr>
    </tbody>
  </table>
</td>
</tr>
</table>

</form>

@endsection