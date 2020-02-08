<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>CodeJam - Earthquake</title>
        <!-- Font Awesome -->
        <link href="{{URL::asset("fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
        <!-- Bootstrap core CSS -->
        <link href="{{URL::asset("MDB/css/bootstrap.css")}}" rel="stylesheet" type="text/css">
        <!-- Material Design Bootstrap -->
        <link href="{{URL::asset("MDB/css/mdb.min.css")}}" rel="stylesheet" type="text/css">
        <!-- Your custom styles (optional) -->
        <link href="{{URL::asset("MDB/css/style.css")}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset("css/admin/menu.css")}}" rel="stylesheet" type="text/css">

        @yield('css')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CodeJam - EarthQuake
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <!-- SCRIPTS -->
    <script src="{{URL::asset("/MDB/js/jquery.js")}}"></script>
    <script src="{{URL::asset("/js/jquery-easing/jquery.easing.js")}}"></script>

    <script src="{{URL::asset("/MDB/js/mdb.js")}}"></script>


    <script src="{{URL::asset("/MDB/js/popper.js")}}"></script>
    <script src="{{URL::asset("/js/admin/menu.js")}}"></script>
    <script src="{{URL::asset("/MDB/js/bootstrap.js")}}"></script>

    @yield('js')
</html>
