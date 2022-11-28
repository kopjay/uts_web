<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Store</title>
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
        <!-- Bootstrap CSS -->
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
          
        <!-- Bootstrap Bundle with Popper -->
        <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    </head>
    <body>
        <header>
          <div class="bg-warning" style="text-align: center; color:#fff; height:150px;justify-content:center;align-items:center; display:flex;">
            <h1>Giant Book Suplier</h1>
          </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      @foreach ($categories as $cat)   
                        <li><a class="dropdown-item" href="{{url('category/'.$cat->id)}}">{{$cat->name}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('publisher/')}}">Publisher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('contact/')}}">Contact</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
        </header>

        @yield('content')
        
        <footer>
          <div class="bg-primary" style="text-align: center;color:#fff; margin-top:50px;">
            Happybook by Zainal Mutaqin 2022
          </div>
        </footer>
    </body>
</html>
