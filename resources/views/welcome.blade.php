<!DOCTYPE html>
<head>
    <title>SKYNET - это краудинвестинговая платформа для инвестиций в действующий бизнес.</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('all/assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('/all/assets/img/favicon.ico')}}" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('all/assets/img/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('all/assets/img/favicon-32x32.png')}}" sizes="32x32">
	<link rel="icon" type="image/png" href="{{asset('all/assets/img/favicon-16x16.png')}}" sizes="16x16">
	<link rel="manifest" href="{{asset('all/assets/img/manifest.json')}}">
	<link rel="mask-icon" href="{{asset('all/assets/img/safari-pinned-tab.svg')}}" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('all/assets/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('all/plugins/slider/css/lightslider.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
    <div class="container">
        <div class="row flexible">
            <div class="menu-button">
                <img src="{{asset('all/assets/img/menu.svg')}}">
            </div>
            <div class="logo">
                <a style="text-decoration: none;" href="/">
                    <p>SKYNET</p>
                </a>
            </div>
            <ul class="list">
                <li><a href="/">Главная</a></li>
                <li><a href="/company">О компании</a></li>
                <li><a href="/news">Новости</a></li>
                <li><a href="/about">Проект</a></li>
                <li><a href="/documents">Документы</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="/auth/login">
                    <button class="button-primary">Личный кабинет</button>
                </a>

            @else
                <a href="/auth/login">
                    <button class="button-primary">Войти</button>
                </a>

            @endif
        </div>
    </div>
</nav>
<header>
    <div class="bg-front"></div>
    <div class="container content">
        <div class="row">
            <div class="title">
                <p>SKYNET - это краудинвестинговая платформа для инвестиций в действующий бизнес. </p>
            </div>
        </div>
    </div>

    <section id="sign">
        <div class="bg-front"></div>
        <div class="container center">
            <div class="row">
                <div class="title">
                    <p>Присоединяйтесь к нам!</p>
                </div>
            </div>
            <div class="row">
                {{--<a href="/auth/register" class="button-primary">Стать инвестором</a>--}}
                <form id="sign-in" method="get" action="/auth/register">
                    <input type="text" name="firstname" placeholder="Имя">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <input type="submit" class="button-primary button-orange" value="Стать инвестором" style="opacity: 0.95; Padding:30px 65px; font-size:1.1rem;">
                </form>
            </div>
        </div>
    </section>
</header>
<div id="main">

    <section id="about-company">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>о компании skynet</p>
                </div>
            </div>
            <div class="content row">
                <iframe width="100%" height="515" src="https://www.youtube.com/embed/780KLeTr5tw" frameborder="0"
                        allowfullscreen></iframe>
						<iframe width="100%" height="515" src="https://www.youtube.com/embed/0LWWFhR5AJA" frameborder="0" allowfullscreen></iframe>
						
                    <span align="center" >Идеология - предоставить возможность каждому человеку, вне зависимости от его образования, положения в обществе и статуса на работе, развиваться, зарабатывать, создавать капитал, путешествовать, преуспевать, формируя для себя и своей семьи безопасное, и счастливое окружение.
                    </span>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Партнёры</p>
                </div>
            </div>
            <div class="row content">
                <ul id="partner">
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}" title="Всероссийская Федерация Jiu-Jitsu"></li>
                </ul>
            </div>
        </div>
    </section>
    
</div>
<footer>
    <div class="container">
        <div class="container col-5 logos">
            <p class="logo light lg">SKYNET</p>
        </div>
        <div class="container col-5 copyrights">
            <ul class="light">
                <li class="">О компании SKYNET</li>
                <li><a href="{{asset('docs/politikaconf.pdf')}}" target="_blank">Политика конфиденциальности</a></li>
            </ul>
        </div>
        <div class="container col-5 nav">
            <ul class="light">
                <li><a href="auth/login">Вход в личный кабинет</a></li>
                <li>Контакты</li>
            </ul>
        </div>
        <div class="container col-5 tel">
            <ul class="light">
                <li><img src="{{asset('all/assets/img/phone.png')}}">+7 (999) 651-03-93</li>
            </ul>
        </div>
        <div class="container col-5 social">
            <ul class="social light">
                <a href="http://instagram.com/Skynet.one" target="_blank">
                    <li><img src="{{asset('all/assets/img/instagram.svg')}}"></li>
                </a>
                <a href="https://vk.com/skynetone" target="_blank">
                    <li><img src="{{asset('all/assets/img/vk.svg')}}"></li>
                </a>
                <a href="https://www.facebook.com/groups/188037448274080?ref=bookmarks" target="_blank">
                    <li><img src="{{asset('all/assets/img/facebook-logo.svg')}}"></li>
                </a>
				<a href="https://ok.ru/group/52987470872727" target="_blank">
                    <li><img style="border-radius:1000px;" src="{{asset('all/assets/img/ok.png')}}"></li>
                </a>
				<a href="https://www.youtube.com/channel/UCnW0Lz-kHmyjOKKgtwHohEA" target="_blank">
                    <li><img src="{{asset('all/assets/img/youtube-logo.svg')}}"></li>
                </a>
            </ul>
        </div>
    </div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('all/plugins/slider/js/lightslider.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#partner').lightSlider({
            item: 5,
            loop: false,
            slideMove: 2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed: 600,
            responsive: [
                {
                    breakpoint: 800,
                    settings: {
                        item: 3,
                        slideMove: 1,
                        slideMargin: 6
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        item: 2,
                        slideMove: 1
                    }
                }
            ]
        });
    });
</script>
<script type="text/javascript">
    $('.menu-button').click(function () {
        $('.list').toggleClass('nav-active');
    });
</script>
<script type="text/javascript">
	$(document).ready(function() {
           if($('body').height() <= $(window).outerHeight()) {
              $('footer').addClass('fixed-bot'); 
           }
            else {
                $('footer').removeClass('fixed-bot');
            }
        });
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'aGamT9on07';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
