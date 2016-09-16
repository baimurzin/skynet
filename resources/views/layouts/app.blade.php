<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SkyNet</title>

    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('all/css/morris.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.css" />


</head>
<body>
@include('components.nav-header')

<div class="main">
    @yield('content')
</div>

@include('components.footer')

<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/locale/bootstrap-table-ru-RU.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<script src="{{asset('all/js/common.module.js')}}"></script>
<script src="{{asset('all/js/raphael.min.js')}}"></script>
<script src="{{asset('all/js/morris.js')}}"></script>
@yield('scripts')
</body>
</html>