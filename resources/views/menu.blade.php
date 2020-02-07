<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Click And Glisse - Dashboard</title>
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
</head>


<body class="fixed-sn black-skin">

@yield('main')

@yield('modal')

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
