<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Deliveboo') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('logoetichettachiaro.png') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        {{-- navbar --}}
        <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom p-0 m-0">
            <div class="container d-flex justify-content-end justify-content-md-between">

                {{-- logo --}}
                <div class="logo_laravel_header flex-center">
                <a class="navbar-brand d-none d-md-inline-block p-0 m-0" href="{{ url('/') }}">
                        <span>DELIVE</span>
                        <span>BOO</span>
                    </a>
                </div>
                {{-- logo --}}

                {{-- menu hamburger --}}
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
                {{-- /menu hamburger --}}


                <div id="navbarSupportedContent w-100">

                    <!-- Navbar link -->
                    <ul class=" link-header-guest ml-auto list-unstyled w-100 fw-bold fs-5 flex-center justify-content-end gap-4 p-3 m-0">
                        <!-- Authentication Links -->
                        @guest

                            {{-- go back in front office --}}
                            <li class="">
                                <a class="nav-link" href="http://localhost:5174/">
                                    {{ __('Home') }}
                                </a>
                            </li>
                            {{-- /go back in front office --}}

                            {{-- login --}}
                            <li class="">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                            </li>
                            {{-- /login --}}

                            {{-- register --}}
                            @if (Route::has('register'))
                                <li class="">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                                </li>
                            @endif
                            {{-- /register --}}

                        @else

                            {{-- user name and menu dropdown --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                {{-- dropdown --}}
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-scrollable" aria-labelledby="navbarDropdown">

                                    {{-- dahboard --}}
                                    <a class="dropdown-item"
                                        href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    {{-- /dahboard --}}

                                    {{-- logout --}}
                                    <a class="dropdown-item" onclick="document.getElementById('logout-form').submit();">
                                        {{ __('Esci') }}
                                    </a>

                                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    {{-- /logout --}}

                                </div>
                                {{-- /dropdown --}}

                            </li>
                            {{-- user name --}}

                        @endguest
                    </ul>
                    <!-- /Navbar link -->

                </div>
            </div>
        </nav>
        {{-- navbar --}}


        <main class="">
            @yield('content')
        </main>
    </div>

</body>

</html>
