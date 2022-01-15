@extends('layouts.main')

@section('title', 'Login')

@section('headerfooter')

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-center">
    <h1 id="purple">Register</h1>
  </div>
  
      <div class="d-flex justify-content-center">

        <form action="/register" enctype="multipart/form-data" method="POST">
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
                  <td>Address</td>
                  <td><input type="text" name="Address" placeholder="Enter Address"></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><input type="password" name="Password" placeholder="Enter Password"></td>
            </tr>
              <tr>
                  <td>Gender</td>
                  <td>
                    <div class="form-check">
                      <input class="Gender" type="radio" name="Gender" id="Gender" value="Man" checked>
                        Male
                    </div>
                    <div class="form-check">
                      <input class="Gender" type="radio" name="Gender" id="Gender" value="Woman">
                        Female
                    </div>
                  </td>
              </tr>
          </table>
          <button type="submit">Register</button>
      </form>
    

        {{-- <form action="/register" method="POST">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="Name">Full Name</label>
            <input type="text" class="form-control" id="Name" placeholder="Enter your full name here">
          </div>  
            <div class="form-group">
              <label for="Email">Email address</label>
              <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="Address">Address</label>
              <input type="text" class="form-control" id="Address" placeholder="Enter your address here">
            </div>

            Gender
            <div class="form-check">
              <input class="Gender" type="radio" name="Gender" id="Gender" value="Man" checked>
              <label class="Gender" for="Man">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="Gender" type="radio" name="Gender" id="Gender" value="Woman">
              <label class="Gender" for="Woman">
                Female
              </label>
            </div>


            <button type="submit" class="btn btn-primary">Register</button>
        </form>   --}}
      

</div>
  @endsection
  