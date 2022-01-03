@extends('layouts.guest')

@section('title', 'Home')

@section('headerfooter')

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-center">
    <h1 id="purple">Welcome to JH Furniture</h1>
  </div>
  <img src="{{ asset('img/Jessheim.jpg') }}" class="rounded float-start" alt="...">
  <img src="..." class="rounded float-end" alt="...">
</div>
  @endsection
  