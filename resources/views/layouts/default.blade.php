<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EAD Health</title>
    <style>
        .carousel-inner img {
            margin: auto;
        }
        
        .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem;
        }
    </style>

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-3" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto" style="">
                <a style="margin-right: 145px;"></a>
                <a class="nav-link text-dark @if(Request::is('/')) fw-bold @endif"   href="{{ url('/') }}">Home </a>
                <a class="nav-link text-dark @if(Request::is('vaccine')) fw-bold @endif" href="{{ url('/') }}">About</a>
                <a class="nav-link text-dark @if(Request::is('patient')) fw-bold @endif" href="{{ url('/') }}" >Categories</a>
                <a class="nav-link text-dark @if(Request::is('patient')) fw-bold @endif" href="{{ url('/') }}" >Services</a>
                <a class="nav-link text-dark @if(Request::is('patient')) fw-bold @endif" href="{{ url('/') }}" >Product</a>
                <a class="nav-link text-dark @if(Request::is('patient')) fw-bold @endif" href="{{ url('/') }}" >Contact</a>
                <a class="nav-link text-dark" style='margin-left: 30px;'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></a>
                <a class="nav-link text-dark" style='margin-left: 15px;'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg></a>
                <a class="nav-link text-dark" style='margin-left: 15px;'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg></a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @stack('before-content')
            @yield('content')
            @stack('after-content')
        </div>
    </div>

    <footer class="navbar navbar-light bg-light mt-10">
        
    </footer>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>
</html>