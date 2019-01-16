<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EstoEsCanada</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img class="logo" src="{{asset('images/buzzlogo.png')}}" alt="logo">
                    </a>

                    
                </div>

                <div class="navbar-menu">
                    <div class="navbar-start">
                            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">News</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                    </div>
                </div>

                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                        <a href="{{route('register')}}" class="navbar-item is-tab">Join the Community</a>
                    @else
                        
                    <div class="navbar-item has-dropdown is-hoverable is-aligned-right">
                            <a class="navbar-link">
                              Hey Rodolfo
                            </a>
                    
                            <div class="navbar-dropdown">
                              <a class="navbar-item">
                                <span class="icon"><i class="fa fa-fw fa-user"></i></span> Profile
                              </a>
                              <a class="navbar-item">
                                <span class="icon"><i class="fa fa-fw fa-bell"></i></span> Notification
                              </a>
                              <a class="navbar-item">
                                <span class="icon"><i class="fa fa-fw fa-cog"></i></span> Settings
                              </a>
                              <hr class="navbar-divider">
                              <a class="navbar-item">
                                <span class="icon"><i class="fa fa-sign-out"></i></span> Logout
                              </a>
                            </div>
                          </div>
                        
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
