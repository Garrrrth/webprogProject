@extends('layouts.guest')

@section('title', 'Login')

@section('headerfooter')

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-center">
    <h1 id="purple">Register</h1>
  </div>
      <div class="content">
        <form>  
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Enter your address here">
            </div>

            Gender
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Man" id="Man" value="Man" checked>
              <label class="form-check-label" for="Man">
                Man
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Woman" id="Woman" value="Woman">
              <label class="form-check-label" for="Woman">
                Woman
              </label>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>  
      

</div>
  @endsection
  