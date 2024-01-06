<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .navbar {
            background-color: #aac8e3; /* Use your primary color */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);

        }

        .navbar-brand {
            color: #ffffff; /* White text */
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #ffffff; /* White text */
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #ecf0f1; /* Lighter shade on hover */
        }

        .navbar-toggler-icon {
            background-color: #ffffff; /* White color for the toggle icon */
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-nav li {
            margin-right: 15px;
        }

        .navbar-nav .dropdown-menu {
            border: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .dropdown-item {
            color: #2c3e50; /* Use a darker color for dropdown items */
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #ecf0f1; /* Lighter shade on hover */
            color: #3498db; /* Primary color on hover */
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Sultanah Asma School
                </a>

                {{-- <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('instructor'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></b>
                            </li>
                        @endif
                        @if(Auth::user()->hasRole('student'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/home') }}">Home</a></b>
                            </li>
                        @endif
                    @endif
                    <li class="nav-item">
                        <b><a class="nav-link" href="{{ url('/profile') }}">Profile</a></b>
                    </li>
                </ul> --}}
                <ul class="navbar-nav me-auto">
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('instructor'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a></b>
                            </li>
                        @endif
                        @if(Auth::user()->hasRole('student'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/home') }}">Home</a></b>
                            </li>
                        @endif
                    @endif
                    @if(Auth::check())
                        @if(Auth::user()->hasRole('instructor'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/module-instructor') }}">Module</a></b>
                            </li>
                        @endif
                        @if(Auth::user()->hasRole('student'))
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/student-module') }}">Module</a></b>
                            </li>
                            <li class="nav-item">
                                <b><a class="nav-link" href="{{ url('/enroll-module') }}">Enrollment</a></b>
                            </li>
                        @endif
                    @endif
                    <li class="nav-item">
                        <b><a class="nav-link" href="{{ url('/profile') }}">Profile</a></b>
                    </li>
                </ul>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
