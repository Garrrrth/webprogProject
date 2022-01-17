@extends('layouts.main')

@section('title', 'Login')

@section('headerfooter')

<div class="container-fluid mt-4">
  <div class="d-flex justify-content-center">
    <h1 id="purple">Login</h1>
  </div>
  <div class="d-flex justify-content-center">
    <div class="row g-3 align-items-center">
        <form method="post" action="/login">
          @csrf
          <table>
          <label class="emailPass">
            Email <input type="email" name="email" />
          </label>
          
          <label class="emailPass">
            Password <input type="password" name="password" />
          </label>
        </table>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>

          @if ($errors->any())
            @foreach ($errors->all() as $error)
            <br>
            <i>{{$error}}</i>
            @endforeach
          @endif
        </form>
      
      
    </div>
  </div>
</div>
  @endsection
  