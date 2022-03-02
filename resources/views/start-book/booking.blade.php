<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/theme.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
        background-image: url('JPG/bg-register.jpg');
        background-size: cover; 
        width: 100%;
        height: 300px; 
        background-position: center;
        background-repeat: no-repeat;
    }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top" style="background-color: #fafafa">
            <div class="container">
                {{-- Logo --}}
                <img src="{{asset('JPG/logo.png')}}" width="230" height="230" style="padding: 0; margin: -100px;">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="font-family:'Montserrat', sans-serif; margin-right: 10px; margin-left: 120px;">
                        <!-- Authentication Links -->
                        <li class="nav-item mr-2">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav" style="font-family: 'Montserrat', sans-serif">
                        <li class="nav-item dropdown" style="border-left: 2px solid; color: #919191">
                            <svg style=" margin-left: 3px;" xmlns="http://www.w3.org/2000/svg"  height="50px" viewBox="0 0 24 24" width="50px" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                             @guest
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding: 17px; margin-top:20px;  width:250px; background-color:#f3f3f3">
                                <h2 class="text-center text-secondary">LOGIN</h2>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form-group mb-4 mt-3" style="">
                                        <input type="text" name="email" class="form-control mb-2 text-center" placeholder="E-mail" style="border-color: #6c757d; background-color: #f3f3f3">
                                        <input type="password" name="password" class="form-control text-center" placeholder="Password" style="border-color: #6c757d; background-color: #f3f3f3">
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-block">Login</button>
                                        @if (Route::has('register'))
                                        <a href="{{route('register')}}" class="btn btn-outline-secondary btn-block">Register</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        @else
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding: 17px; margin-top:20px;  width:250px; background-color:#f3f3f3 ">
                                    <h4 class="text-center text-secondary">Welcome,</h4>
                                     <h3 class="text-center text-secondary mb-4">{{ Auth::user()->name }}</h3>
                                   
                                    <a class=" btn btn-outline-secondary btn-block" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest 
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- Content --}}
        <div class="container" style="padding: 100px">
            <div class="card border-0" style="background-color:#f9f9f9 ">
                <div class="card-body" style="padding: 100px 0px;">
                    <h2 class="text-center" style="font-family: 'Montserrat', sans-serif">Thank You For Booking! <br>
                        Please Confirm When You Are At Our Location.
                    </h2>
                </div>
            </div>
        </div>

    </div>
</body>
</html>