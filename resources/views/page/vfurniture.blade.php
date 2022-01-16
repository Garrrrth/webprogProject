@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center"> 
        <h1 id="purple">View Furniture</h1>        
    </div>
  
    <div class="card-group">
      {{-- ni ntar cardnya di loop trus hrefnya juga ngelempar barang dri database furniturenya --}}
      @foreach ( $Furniture as $F)
      <div class="card" style="width: 18rem;">
        <img src="{{ asset($F->image) }}" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$F->name}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/detail/{{$F->id}}" class="btn btn-primary">Add to Cart</a>
          </div>
        </div>
        @endforeach 
     </div>  
    </div>
  
        <br>
        <br>
        <br>
          {{-- buat kalo ada yang login
            if(auth()->user() != null){
              Keluarin tombol logout disini
              
            }
            --}}
      
  </div>

@endsection