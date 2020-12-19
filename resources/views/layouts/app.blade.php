<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @yield('styles')
    @yield('extended-styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="nav-container">
                <a class="navbar-brand brand-container" href="{{ url('/') }}">
                    <img class="thumbnail" src="{{asset('images/thumbnail.png')}}" alt="{{ config('app.name', 'PlantsLand') }}">
                    <div class="logo">{{ config('app.name', 'PlantsLand') }}</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-3"> 
                            <a class="nav-link" href="/gardener">Gardener</a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="/store">Store</a>
                        </li>
                        {{-- <li class="nav-item mr-3">
                            <a class="nav-link" href="#">Forum</a>
                        </li> --}}
                        @yield('nav-search')
                        <li class="nav-item">
                            <div class="v-line" style="margin: 0 20px;"></div>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item mr-3">
                                <a class="nav-link login-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link register-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                @can('isMember')
                                <div class="member-btn-container">
                                    <a class="btn-dark mr-2 pt-1 pb-1 pr-2 pl-2" href="/cart" role="button"> Cart </a>
                                    <a class="btn-dark mr-2 pt-1 pb-1 pr-2 pl-2"  href="/history" role="button"> History </a>
                                </div>
                                @endcan
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('breadcrumb')
        @yield('content')
    </div>
    <script>
        window.addEventListener('load', searchAnimation);
        function searchAnimation () {
            const searchIcon = document.getElementById('search-icon');
            const searchInput = document.getElementsByClassName('search-input')[0];

            searchIcon.onclick = function ( e ) { 
                e.preventDefault();
                if ( searchInput.style.width == "100%" ) {
                    document.getElementById('search-form').submit();
                } else {
                    searchInput.style.width = "100%";
                    searchInput.style.opacity = 1;
                }
                e.stopPropagation();
            }
            document.onclick = function ( e ) { 
                if ( !e.target.classList.contains('search-input') ) {
                    searchInput.style.width = "0";
                    searchInput.style.opacity = 0;
                }
            }
        }
    </script>
    @yield('script')

</body>
</html>
