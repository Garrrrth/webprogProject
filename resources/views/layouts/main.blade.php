<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
{{-- scripts --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
@yield('css')

<body>


      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #a748aa">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">JH Furniture</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="/vfurniture">View Furniture</a>
              </li>
             
              @if (auth()->user() != null)

              @if (auth()->user()->role == 'user')

              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="{{route('profile')}}">Profile</a>
              </li>

              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="/cart">Cart</a>
              </li>  
              
              @else
              
              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="{{route('profile')}}">Profile</a>
              </li>

              <li class="nav-item">
                <a class="nav-link fw-bold text-white" href="/addfurniture">Add Furniture</a>
              </li>  
                  
              @endif
              
          @else
           <li class="nav-item">
              <a class="nav-link fw-bold text-white" href="{{ route('login') }}">Login</a>
            </li>
             <li class="nav-item">
               <a class="nav-link fw-bold text-white" href="{{ route('register') }}">Register</a>
             </li>
          @endif

              
            </ul>
        </div>
      </nav>

    @yield('headerfooter')

    <div class="card-footer text-center text-white fixed-bottom" style="background-color: #a748aa">
      Copyright ?? Bluejack 20-1
    </div>

</body>
</html>