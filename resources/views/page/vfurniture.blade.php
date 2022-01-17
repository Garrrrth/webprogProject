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
                        <img src="{{ asset($F->image) }}" class="resize" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $F->name }}</h5>
                            <p class="card-text">Rp. {{ $F->price }}</p>
                            @if (auth()->user() != null)

                            @if (auth()->user()->role == 'user')
                                <a href="/detail/{{ $F->id }}" class="btn btn-primary">Add to Cart</a>
                            @else
                                <a href="/updatefurniture/{{ $F->id }}"><button type="button"
                                        class="button1">Update</button></a>
                                <form action="/delete/{{ $F->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="button2">Delete</button>
                                </form>
                            @endif



                        @else
                            <a href="/login" class="btn btn-primary">Add to Cart</a>
                        @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="float-right">
                {{ $Furniture->links() }}
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
