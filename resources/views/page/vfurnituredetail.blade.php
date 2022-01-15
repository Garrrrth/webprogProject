@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center"> 
        <h1 id="purple">Asset Name Furniture</h1>        
    </div>
  

    <div class="position-absolute top-50 start-50 translate-middle">

        <div class="detailPic" style="float: left">
            <img src="{{ asset('img/Mammut.jpg') }}" alt="FurnitureDetail">
        </div>
        
        <div class="detailInfo" style="float: right">
            <table>
                <tr>
                    <th class="px-5">Name</th>  
                    {{-- <th>buat auth</th> --}}
                </tr>
                <tr>
                    <th class="px-5">Price</th>
                </tr>
                <tr>
                    <th class="px-5">Type</th>
                </tr>
                <tr>
                    <th class="px-5">Color</th>
                </tr>
               
                             
            </table>
        </div>

        
    </div>

    <div class="position-absolute bottom-0 start-50 translate-middle-x">
        <div class="mb-5">

         @if (auth()->user()->role == 'user')
            <a href="/vfurniture"><button type="button" class="button" >Previous</button></a>
            <a href="#"><button type="button" class="button" >Add to Cart</button></a>
            
         @else
            <a href="/vfurniture"><button type="button" class="button" >Previous</button></a>
            <a href="#"><button type="button" class="button1" >Update</button></a>
            <a href="#"><button type="button" class="button2" >Delete</button></a>
         @endif
        </div>

        
    </div>
   
    
    
  </div>

@endsection