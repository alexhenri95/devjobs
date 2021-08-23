<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    @yield('styles')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>
<body class="bg-gray-200 min-h-screen leading-none">
    <div id="app">
        <nav class="bg-indigo-800 shadow-md py-4">
            <div class="container mx-auto px-4 md:px-16">
                <div class="flex items-center justify-between">
                    <a class="flex text-2xl text-white" href="{{ url('/') }}">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        TechnoJobs
                    </a>

                    <nav class=" text-right">
                        <div class="block md:hidden">
                            <button
                                class="navbar-burger2 flex items-center px-2 py-1 border rounded text-white border-white hover:text-white hover:border-white">
                                <svg class="fill-current h-4 w-4 text-white" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>

                        @guest
                            <a class="text-white no-underline hover:underline hover:text-gray-300 px-2 py-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="text-white no-underline hover:underline hover:text-gray-300 py-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <div class="hidden md:block">
                                <a href="{{ route('vacantes.index') }}" class="text-white hover:underline hover:text-gray-300 p-3">Mis Vacantes</a>

                                <a href="{{ route('notificaciones') }}" class="text-white hover:underline hover:text-gray-300 p-3">Notificaciones ({{ Auth::user()->unreadNotifications->count() }})</a>

                                <a class="no-underline hover:underline text-gray-300 text-sm py-3" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    </nav>

                </div>

                <div id="main-nav2" class="w-full flex-grow items-center hidden">
                    <div class="text-sm lg:flex-grow mt-2 animated jackinthebox">
                        <ul>
                            <li>
                                <a href="{{ route('vacantes.index') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white font-semibold hover:text-gray-300 p-1 text-sm rounded">Mis Vacantes</a>
                            </li>

                            <li>
                                {{-- <a href="{{ route('notificaciones') }}" class="block mt-4 lg:inline-block lg:mt-0 text-white font-semibold hover:text-gray-300 p-1 text-sm rounded">Notificaciones ({{ Auth::user()->unreadNotifications->count() }})</a> --}}
                            </li>

                            {{-- <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span> --}}

                            <li>
                                
                                <a class="block mt-4 lg:inline-block lg:mt-0 text-white font-semibold hover:text-gray-300 p-1 text-sm rounded" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="bg-indigo-400">
            <nav class="container mx-auto md:px-16 flex  text-center md:flex-row space-x-1">
                @yield('navegacion')
            </nav>
        </div>

        <div class="mx-auto">
            @yield('navegacionCategorias')
        </div>

        <main class="container px-4 md:px-16 md:mt-10 mx-auto">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
    
    <script>
        // Navbar Toggle
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
          
            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {
          
              // Add a click event on each of them
              $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {
          
                  // Get the "main-nav" element
                  var $target = document.getElementById('main-nav');
          
                  // Toggle the class on "main-nav"
                  $target.classList.toggle('hidden');
          
                });
              });
            }
          
        });

        // Navbar Toggle
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers2 = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger2'), 0);
          
            // Check if there are any navbar burgers
            if ($navbarBurgers2.length > 0) {
          
              // Add a click event on each of them
              $navbarBurgers2.forEach(function ($el) {
                $el.addEventListener('click', function () {
          
                  // Get the "main-nav" element
                  var $target = document.getElementById('main-nav2');
          
                  // Toggle the class on "main-nav"
                  $target.classList.toggle('hidden');
          
                });
              });
            }
          
        });
    </script>
</body>
</html>
