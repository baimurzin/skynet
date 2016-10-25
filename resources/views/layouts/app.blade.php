<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SKYNET - это краудинвестинговая платформа для инвестиций в действующий бизнес.</title>
    <link rel="icon" href="{{asset('all/assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('/all/assets/img/favicon.ico')}}" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('all/assets/img/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('all/assets/img/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('all/assets/img/favicon-16x16.png')}}" sizes="16x16">
	<link rel="manifest" href="{{asset('all/assets/img/manifest.json')}}">
	<link rel="mask-icon" href="{{asset('all/assets/img/safari-pinned-tab.svg')}}" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/index.css')}}">
	<link type="text/css" rel="stylesheet" href="{{asset('all/assets/dialogs.css')}}">
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
        crossorigin="fonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/locale/bootstrap-table-ru-RU.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<script src="{{asset('all/js/common.module.js')}}"></script>
<script src="{{asset('all/js/raphael.min.js')}}"></script>
<script src="{{asset('all/js/morris.js')}}"></script>
<script type=text/javascript>
	$(document).ready(function() {
           if($('body').height() <= $(window).outerHeight()) {
              $('footer').addClass('fixed-bot'); 
           }
            else {
                $('footer').removeClass('fixed-bot');
            }
        });
	</script>
@yield('scripts')
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'aGamT9on07';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>