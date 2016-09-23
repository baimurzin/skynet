<!DOCTYPE html>
<head>
    <title>SKYNET</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('all/assets/img/favicon.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('all/aseets/img/favicon.ico')}}" type="image/x-icon"/>
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
                <li><a href="cabinet/news">Новости</a></li>
                <li><a href="/about">Проект</a></li>
                <li><a href="/documents">Документы</a></li>
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
                    <input type="submit" class="button-primary" value="Присоединиться">
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
                <iframe width="100%" height="515" src="https://www.youtube.com/embed/0-nZ1MH21Wo" frameborder="0"
                        allowfullscreen></iframe>
                    <span>Идеология - предоставить возможность каждому человеку, вне зависимости от его образования, положения в обществе и статуса на работе, развиваться, зарабатывать, создавать капитал, путешествовать, преуспевать, формируя для себя и своей семьи безопасное, и счастливое окружение.
                    </span>
            </div>
        </div>
    </section>
    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Наши партнёры</p>
                </div>
            </div>
            <div class="row content">
                <ul id="partner">
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('all/assets/img/ex-logo.png')}}"></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="social-block" class="dark">
        <div class="bg-front"></div>
        <div class="container">
            <div class="row">
                <div class="title light sm">
                    <p>Следите за нами в социальных сетях</p>
                </div>
                <div class="row content">
                    <a href="http://instagram.com/Skynet.one"><img src="{{asset('all/assets/img/instagram.svg')}}"></a>
                    <a href="https://vk.com/skynetone"><img src="{{asset('all/assets/img/vk.svg')}}"></a>
                    <a href="http://www.facebook.com/Skynet.one"><img
                                src="{{asset('all/assets/img/facebook-logo.svg')}}"></a>
                </div>
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
                <li>Политика конфиденциальности</li>
            </ul>
        </div>
        <div class="container col-5 nav">
            <ul class="light">
                <li>Вход в личный кабинет</li>
                <li>Контакты</li>
            </ul>
        </div>
        <div class="container col-5 tel">
            <ul class="light">
                <li><img src="{{asset('all/assets/img/phone.png')}}">8 (800) 555-35-35</li>
            </ul>
        </div>
        <div class="container col-5 social">
            <ul class="social light">
                <a href="http://instagram.com/Skynet.one">
                    <li><img src="{{asset('all/assets/img/instagram.svg')}}"></li>
                </a>
                <a href="https://vk.com/skynetone">
                    <li><img src="{{asset('all/assets/img/vk.svg')}}"></li>
                </a>
                <a href="http://www.facebook.com/Skynet.one">
                    <li><img src="{{asset('all/assets/img/facebook-logo.svg')}}"></li>
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
</body>