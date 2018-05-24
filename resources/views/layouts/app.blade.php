<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/pace.css')}}">
    <!-- END VENDOR CSS-->

    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app-robust.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/colors.css')}}">
    <!-- END ROBUST CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/core/colors/palette-gradient.css')}}">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- END Custom CSS-->

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu fixed-navbar 2-columns menu-expanded">
    <div id="app">
        @include('layouts._header')
        @include('layouts._menu')
        <div class="robust-content content container-fluid">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
    </div>
    @section('scripts')
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/core/libraries/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/tether.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/libraries/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/unison.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/blockUI.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/ui/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/extensions/pace.min.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{('js/core/app.js')}}" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    @show
</body>
</html>
