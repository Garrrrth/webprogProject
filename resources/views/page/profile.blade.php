@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="d-flex justify-content-center">
<h1 id="purple">{{auth()->user()->name}}'s Profile</h1>
</div>
<div class="d-flex justify-content-center">
    
    <table class="mt-5">
        
        <tr>
            <th class="px-5">Name</th><th>{{auth()->user()->name}}</th>
        </tr>
        <tr>
            <th class="px-5">Email</th><th>{{auth()->user()->email}}</th>
        </tr>
        @if (auth()->user()->role == 'user')
        <tr>
            <th class="px-5">Role</th><th>{{auth()->user()->role}}</th>
        </tr>
        <tr>
            <th class="px-5">Address</th><th>{{auth()->user()->address}}</th>
        </tr>
        <tr>
            <th class="px-5">Gender</th><th>{{auth()->user()->gender}}</th>
        </tr>

        @else

        <tr>
            <th class="px-5">Role</th><th>{{auth()->user()->role}}</th>
        </tr>
        @endif
        
    </table>
    

</div>

<div class="position-absolute top-50 start-50 translate-middle">

<a href="/logout"><button type="button" class="button">Logout</button></a>


{{-- bedain biar admin kluar smua transaction, user cmn kluar punya mreka idk --}}
@if (auth()->user()->role == 'user')
    <a href="/transactionHistory"><button type="button" class="button" >View Transaction History</button></a>
@else
<a href="/transactionHistory"><button type="button" class="button" >View All User's Transaction</button></a>
@endif



<a href="/upProfile"><button type="button" class="button">Update Profile</button></a>
</div>

@endsection