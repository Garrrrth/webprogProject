@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="d-flex justify-content-center">
<h1 id="purple">{{auth()->user()->name}}'s Profile</h1>
</div>
<div class="d-flex justify-content-center">
    <table>
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

<a href="/logout"><button type="button" class="btn btn-purple">Logout</button></a>

@if (auth()->user()->role == 'user')
    <a href="#"><button type="button" class="btn btn-purple" >View Transaction History</button></a>
@else
<a href="#"><button type="button" class="btn btn-purple" >View All User's Transaction</button></a>
@endif



<a href="/upProfile"><button type="button" class="btn btn-purple">Update Profile</button></a>


@endsection