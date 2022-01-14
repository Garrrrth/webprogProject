@extends('layouts.main')

@section('title', 'Profile')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Update Profile</h1>
    </div>
        <div class="content">
          <form>  
              <div class="form-group">
                <label for="editEmail">Email address</label>
                <input type="email" class="form-control" id="editEmail" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              
              <div class="form-group">
                <label for="editName">Address</label>
                <input type="text" class="form-control" id="editName" placeholder="Replace your name here">
              </div>

              <div class="form-group">
                <label for="editPassword">Password</label>
                <input type="password" class="form-control" id="editPassword" placeholder="Password">
              </div>
  
              @if (auth()->user()->role == 'user')
              <div class="form-group">
                <label for="editAddress">Address</label>
                <input type="text" class="form-control" id="editAddress" placeholder="Edit your address here">
              </div>
             @else
                 
             @endif
  
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
        
  
  </div>

@endsection