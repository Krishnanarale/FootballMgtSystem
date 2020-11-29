<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontTheam/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('frontTheam/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontTheam/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontTheam/css/landing-page.css')}}" rel="stylesheet">
    <link href="{{ asset('frontTheam/css/landing-page.min.css')}}" rel="stylesheet">
    <script src="{{ asset('frontTheam/vendor/jquery/jquery.min.js')}}"></script>
    <style type="text/css">
        /*new css*/
        .top-header ul.navbar-nav {
            float: right;
        }
        .top-header ul.navbar-nav {
            float: right;
            padding-top: 10px;
        }
        .header-nav-row a img {
            float: left;
            margin-right: 10px;
        }

        .header-nav {
            flex-grow: inherit;
        }
        .header-nav ul li a {
            color: #fff;
            position: relative;
            padding:0;
        }
        .header-nav ul li {
            margin: 0 ;
        }
        .header-nav ul li:last-child a{
            padding-right:0;
        }
        .top-header a {
            color: #fff;
        }
        .header-nav ul li a:before {
            content: "";
            width: 0;
            height: 3px;
            bottom: -10px;
            left: 0;
            background: #ffc722;
            position: absolute;
            transition: all 400ms;
            -webkit-transition: all 400ms;
            right: 0;
            margin: auto;
        }
        .header-nav ul li a:hover:before {
            width: 100%;
            color: #ffc722;
        }
        .header-nav ul li a:hover {
            text-decoration: none;
            color: #ffc722;
        }
        header.header-banner {
            margin-top: -160px !important;
        }
        header.header {
            overflow: hidden;
            position: relative;
            z-index: 11;
        }
        .top-header {
            position: relative;
            z-index: 1;
            background: rgba(0, 0, 0, 0.2);
        }
        .header-nav-row {
            background: rgba(0, 0, 0, 0.2);
        }
        .header-nav-row a.navbar-brand{
            padding-right: 0;
            position: relative;
            transition: 400ms all;
            -webkit-transition: 400ms all;
            z-index: 3;
        }
        .header-nav-row a.navbar-brand:before {
            content: '';
            transform: skewX(-33deg);
            -webkit-transform: skewX(-33deg);
            background: #fdbd00;
            position: absolute;
            right: 28px;
            top: -45px;
            bottom: -11px;
            left: -1000%;
            z-index: -2;
            transition: 400ms all;
            -webkit-transition: 400ms all;
        }
        .header-nav-row a.navbar-brand:after {
            content: '';
            transform: skewX(-33deg);
            -webkit-transform: skewX(-33deg);
            background: #ffc722;
            position: absolute;
            right: 39px;
            top: 0;
            bottom: 0;
            left: -1000%;
            z-index: -1;
        }
        .Logo-txt{color: #000; font-weight: bold; font-size: 28px; margin-top: 25px;}
        .Logo-txt span{color: #fff;}
        footer.footer {
            background: url(/frontTheam/img/footer-bk.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .FLogo-txt span {
            font-size: 32px;
            color: #fff;
        }
        .footer-logo {
            margin-bottom: 20px;
        }
        .copy-right p {
            color: #fff;
        }
        /*new css*/
    </style>
</head>

<body>
<header class="header">
    <div class="top-header w-100 float-left">
        <div class="container">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 sm:block">
                        @auth
                            <a href="{{ (Auth::user()->is_admin != '') ? '/admin/home' : '/home' }}" class="text-sm text-gray-700 underline">Home</a>
                            <a class="ml-2 text-sm text-gray-700 underline" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
{{--                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                {{ __('Logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                            <a class="ml-2 text-sm text-gray-700 underline" href="/players/{{Auth::user()->player->id}}/edit">Profile</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-md navbar-light static-top shadow-sm header-nav-row">
        <div class="container">
        <!-- <a class="navbar-brand" href="{{ url('/') }}" style="color: black !important;">
                    {{ config('app.name', 'Laravel') }}
            </a> -->
            <a class="navbar-brand" href="{{ url('/') }}" style="color: black !important;">
                <img class="d-block" src="{{ asset('/frontTheam/img/pataaki-logo.png')}}" alt="pataaki">
                <div class="Logo-txt">Pataaki <span>Football Club</span></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse header-nav" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li><a href="/players-list">Players</a></li>
{{--                    <li><a href="/trainers/create" class="ml-4">Trainer</a></li>--}}
                    <li><a class="ml-4" href="/about-us">About</a></li>
                    <li><a class="ml-4" href="/contact-us">Contact</a></li>
                    <li><a class="ml-4" href="/terms-conditions">Terms & Conditions</a></li>
                    <li><a class="ml-4" href="/privacy-policy">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="app">
    <main>
        @yield('content')
    </main>
</div>

<!-- Footer -->
<footer class="footer bg-light">
    <!--  <div class="container-fluid" style="padding:0; "> -->
    <div class="FDIv">
        <div class="col-sm-12 footer-logo">
            <div class="FLogo-txt text-center">
                <span>Pataaki Football Club</span>
            </div>
        </div>
        <hr>
        <div class="col-sm-12 copy-right text-center">
            <p class="small mb-4 mb-lg-0">&copy; {{config('app.name', 'Laravel')}} 2020. All Rights Reserved.</p>
        </div>
        <!-- <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
                <li class="list-inline-item">
                    <a href="/about-us">About</a>
                </li>
                <li class="list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                    <a href="/contact-us">Contact</a>
                </li>
            </ul>

        </div> -->
        <!-- <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mr-3">
                    <a href="#">
                        <i class="fab fa-facebook fa-2x fa-fw"></i>
                    </a>
                </li>
                <li class="list-inline-item mr-3">
                    <a href="#">
                        <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                    </a>
                </li>
            </ul>
        </div> -->
    </div>
    <!-- </div> -->
</footer>

<!-- Bootstrap core JavaScript -->

<script src="{{ asset('frontTheam/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
