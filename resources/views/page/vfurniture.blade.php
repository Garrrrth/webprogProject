@extends('layouts.main')

@section('title', 'View Furniture')

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
            <p class="card-text">Rp. {{F->price}}</p>
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