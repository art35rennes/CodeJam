<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Earthquake - Dashboard</title>
    <!-- Font Awesome -->
    <link href="{{URL::asset("fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset("MDB/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <!-- Material Design Bootstrap -->
    <link href="{{URL::asset("MDB/css/mdb.min.css")}}" rel="stylesheet" type="text/css">

    <link href="{{URL::asset("MDB\css\addons\datatables.min.css")}}" rel="stylesheet">

    @yield('css')
</head>
<body class="fixed-sn mdb-skin">

<!--Double navigation-->
<header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed wide sn-bg-1">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper sn-ad-avatar-wrapper">
{{--                    TODO replace img--}}
                    <a href="#"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle"><span>{{ Auth::user()->name}}</span></a>
                </div>
            </li>
            <!--/. Logo -->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r active"><i class="sv-slim-icon fas fa-tachometer-alt"></i> Accueil<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="/home#recap" class="waves-effect">
                                        <span class="sv-normal">Récapitulatif</span></a>
                                </li>
                                <li><a href="/home#installations" class="waves-effect">
                                        <span class="sv-normal">Installations</span></a>
                                </li>
                                <li><a href="/home#batiments" class="waves-effect">
                                        <span class="sv-normal">Batiments</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-hand-point-right"></i> Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> FB </span>
                                        <span class="sv-normal">For bloggers</span></a>
                                </li>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> FA </span>
                                        <span class="sv-normal">For authors</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon fas fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> I </span>
                                        <span class="sv-normal">Introduction</span></a>
                                </li>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> MM </span>
                                        <span class="sv-normal">Monthly meetings</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-envelope"></i> Contact me<i class="fas fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> F </span>
                                        <span class="sv-normal">FAQ</span></a>
                                </li>
                                <li><a href="#" class="waves-effect">
                                        <span class="sv-slim"> W </span>
                                        <span class="sv-normal">Write a message</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg rgba-blue-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto">
            <p>Earthquake @yield('page-name')</p>
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="mailto:arthur.sicard@outlook.fr?subject=CodeJam%20EarthQuake"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link"><i class="fas fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                   target="_blank"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>Déconnexion
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
            </li>
{{--            <li class="nav-item dropdown">--}}
{{--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"--}}
{{--                   aria-haspopup="true" aria-expanded="false">--}}
{{--                    Dropdown--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                    <a class="dropdown-item" href="#">Action</a>--}}
{{--                    <a class="dropdown-item" href="#">Another action</a>--}}
{{--                    <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                </div>--}}
{{--            </li>--}}
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->

<!--Main Layout-->
<main>
   @yield('content')
</main>
<!--Main Layout-->

</body>
<!-- SCRIPTS -->
<script src="{{URL::asset("/MDB/js/jquery.min.js")}}"></script>
<script src="{{URL::asset("/MDB/js/popper.min.js")}}"></script>
<script src="{{URL::asset("/MDB/js/bootstrap.min.js")}}"></script>
<script src="{{URL::asset("/MDB/js/mdb.min.js")}}"></script>
<script src="{{URL::asset("/js/utility.js")}}"></script>
<script type="text/javascript" src="{{URL::asset("MDB\js\addons\datatables.min.js")}}"></script>
-<script type="text/javascript">
    $(document).ready(() => {
        // SideNav Initialization
        $(".button-collapse").sideNav();
        new WOW().init();
    });
</script>


@yield('js')
</html>
