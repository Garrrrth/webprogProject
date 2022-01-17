@extends('layouts.main')

@section('title', 'View Furniture')

@section('headerfooter')

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-center">
            <h1 id="purple">View Furniture</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="/search" class="d-flex justify-content-end" method="post">
                        {{ csrf_field() }}
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <div class="card-group">
                {{-- ni ntar cardnya di loop trus hrefnya juga ngelempar barang dri database furniturenya --}}
                @foreach ($Furniture as $F)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($F->image) }}" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $F->name }}</h5>
                            <p class="card-text">Rp. {{ $F->price }}</p>
                            <a href="/detail/{{ $F->id }}" class="btn btn-primary">Add to Cart</a>
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
              
            } --}}

    </div>

    </div>
@endsection
