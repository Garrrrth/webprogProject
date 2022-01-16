@extends('layouts.main')

@section('title', 'Update Profile')

@section('headerfooter')

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-center">
      <h1 id="purple">Update Profile</h1>
    </div>
        <div class="content">
          <form action="/upProfile" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="Name" placeholder="Enter Name"> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" placeholder="Enter Email"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="Password" placeholder="Enter Password"></td>
              </tr>
  
              @if (auth()->user()->role == 'user')
              <tr>
                <td>Address</td>
                <td><input type="text" name="Address" placeholder="Enter Address"></td>
              </tr>
             @else
                 
             @endif
            </table>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>  
        
  
  </div>

@endsection