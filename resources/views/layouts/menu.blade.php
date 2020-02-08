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
    <link href="{{URL::asset("css/welcome.css")}}" rel="stylesheet" type="text/css">

    @yield('css')
</head>
<body>
<header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="/#">
                <strong>Earthquake</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/#home">Accueil
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about-us">A propos du projet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=https://github.com/art35rennes/CodeJam/archive/master.zip" target="_blank">Télécharger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/art35rennes/CodeJam/blob/master/README.md" target="_blank">Tutorial</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="https://github.com/art35rennes/CodeJam" class="nav-link" target="_blank">
                            <i class="fab fa-github mr-2"></i>
                        </a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item">
                            <a href="/dashbord" class="nav-link border border-light rounded"
                               target="_blank">
                                <i class="fas fa-user mr-2"></i>{{Auth::user()->name}}
                            </a>
                        </li>
                        <li class="nav-item ml-1">
                            <a href="{{ route('logout') }}" class="nav-link border border-light rounded"
                               target="_blank"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out mr-2"></i>Déconnexion
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    @else
                    <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link border border-light rounded"
                       target="_blank">
                        <i class="fas fa-user mr-2"></i>Connexion
                    </a>
                    </li>
                    @endif
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    @yield('header-content')

</header>

<!--Main layout-->
<main>
    @yield('body-content')
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer text-center font-small wow fadeIn">

    <!--Call to action-->
{{--    <div class="pt-4">--}}
{{--        <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"--}}
{{--           role="button">Download MDB--}}
{{--            <i class="fas fa-download ml-2"></i>--}}
{{--        </a>--}}
{{--        <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start--}}
{{--            free tutorial--}}
{{--            <i class="fas fa-graduation-cap ml-2"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
{{--    <div class="pb-4">--}}
{{--        <a href="https://www.facebook.com/mdbootstrap" target="_blank">--}}
{{--            <i class="fab fa-facebook-f mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://twitter.com/MDBootstrap" target="_blank">--}}
{{--            <i class="fab fa-twitter mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">--}}
{{--            <i class="fab fa-youtube mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">--}}
{{--            <i class="fab fa-google-plus-g mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://dribbble.com/mdbootstrap" target="_blank">--}}
{{--            <i class="fab fa-dribbble mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://pinterest.com/mdbootstrap" target="_blank">--}}
{{--            <i class="fab fa-pinterest mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">--}}
{{--            <i class="fab fa-github mr-3"></i>--}}
{{--        </a>--}}

{{--        <a href="http://codepen.io/mdbootstrap/" target="_blank">--}}
{{--            <i class="fab fa-codepen mr-3"></i>--}}
{{--        </a>--}}
{{--    </div>--}}
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2020 Copyright:
        <a href="#"> Arthur Sicard & Pierre-Alban Lagadec </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
</body>
<!-- SCRIPTS -->
<script src="{{URL::asset("/MDB/js/jquery.js")}}"></script>
<script src="{{URL::asset("/js/jquery-easing/jquery.easing.js")}}"></script>

<script src="{{URL::asset("/MDB/js/mdb.js")}}"></script>


<script src="{{URL::asset("/MDB/js/popper.js")}}"></script>
<script src="{{URL::asset("/js/admin/menu.js")}}"></script>
<script src="{{URL::asset("/MDB/js/bootstrap.js")}}"></script>

<script type="text/javascript">
    // Animations initialization
    new WOW().init();

</script>

@yield('js')
</html>
