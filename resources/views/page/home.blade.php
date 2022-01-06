@extends('layouts.main')

@section('title', 'Home')

@section('headerfooter')

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-center">
    <h1 id="purple">Welcome to JH Furniture</h1>
  </div>
        @if (auth()->user() != null)
            <p>Hi, {{auth()->user()->name}}</p>
        @else
            <p>Hi, Guest</p>
        @endif

    
        <div class="card rounded float-start ms-5" style="width: 18rem;">
            <img src="{{ asset('img/Mammut.jpg') }}" class="card-img-top" alt="Furniture">
            <div class="card-body">
              <h5 class="card-title">Mammut</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card rounded float-start ms-5" style="width: 18rem;">
            <img src="{{ asset('img/Vuku.jpg') }}" class="card-img-top" alt="Furniture">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card rounded float-start ms-5" style="width: 18rem;">
            <img src="{{ asset('img/Jessheim.jpg') }}" class="card-img-top" alt="Furniture">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card rounded float-start ms-5" style="width: 18rem;">
            <img src="{{ asset('img/Teodores.jpg') }}" class="card-img-top" alt="Furniture">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        
        {{-- buat kalo ada yang login
          if(auth()->user() != null){
            Keluarin tombol logout disini
            
          }
          --}}
    
</div>
  @endsection
  