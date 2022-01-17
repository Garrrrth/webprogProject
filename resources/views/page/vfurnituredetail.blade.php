@extends('layouts.main')

@section('title', 'Furniture Detail')

@section('headerfooter')
@foreach ( $Furniture as $F)
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center"> 
        <h1 id="purple">{{$F->name}}</h1>        
    </div>
  

    <div class="position-absolute top-50 start-50 translate-middle">
        
        <div class="detailPic" style="float: left">
            <img src="{{ asset($F->image) }}" class="resize" alt="FurnitureDetail">
        </div>
        
        <div class="detailInfo" style="float: right">
            <table>
                <tr>
                    <th class="px-5">Name</th>  
                    <th>{{$F->name}}</th>
                    
                </tr>
                <tr>
                    <th class="px-5">Price</th>
                    <th>Rp. {{$F->price}}</th>
                </tr>
                <tr>
                    <th class="px-5">Type</th>
                    <th>{{$F->type}}</th>
                </tr>
                <tr>
                    <th class="px-5">Color</th>
                    <th>{{$F->color}}</th>
                </tr>
               
                             
            </table>
        </div>
        
        

        
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        <div class="mb-5">

         @if (auth()->user()->role == 'user')
            <a href="/vfurniture"><button type="button" class="button" >Previous</button></a>
            <form action="/bfurniture/{{$F->id}}/{{auth()->user()->id}}" method = "post">
                {{ csrf_field() }}
                <button type="submit" class="button2" >Add to Cart</button>
            </form>
            
         @else
            <a href="/vfurniture"><button type="button" class="button" >Previous</button></a>
            
            <a href="/{{$F->id}}/updatefurniture"><button type="button" class="button1" >Update</button></a>
            <form action="/delete/{{$F->id}}" method = "post">
                {{ csrf_field() }}
                {{method_field('delete')}}
                <button type="submit" class="button2" >Delete</button>
            </form>
         @endif
        </div>

        
    </div>
   
    
    
  </div>
  @endforeach
@endsection