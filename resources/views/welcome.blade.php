<!DOCTYPE html>
<head>
    <title>SKYNET</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('plugins/slider/css/lightslider.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
    <div class="container">
        <div class="row flexible">
            <div class="menu-button">
                <img src="{{asset('assets/img/menu.svg')}}">
            </div>
            <div class="logo">
                <p>SKYNET</p>
            </div>
            <ul class="list">
                <li><a href="/">Главная</a></li>
                <li><a href="/auth/login">Войти</a></li>
                <li><a href="">Новости</a></li>
                <li><a href="">Проект</a></li>
                <li><a href="">Документы</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Поддержка</a></li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="bg-front"></div>
    <div class="container content">
        <div class="row">
            <div class="title">
                <p>SKYNET - платформа для инвестиций от 1$ в действующий бизнес и стартапы по всему миру</p>
            </div>
        </div>
    </div>
</header>
<div id="main">
    <section id="sign">
        <div class="bg-front"></div>
        <div class="container center">
            <div class="row">
                <div class="title">
                    <p>Присоединяйтесь к нам!</p>
                </div>
            </div>
            <div class="row">
                <a href="/auth/register" class="button-primary">Присоедниться</a>
                {{--<form id="sign-in">--}}
                    {{--<input type="text" name="name" placeholder="Имя">--}}
                    {{--<input type="tel" name="tel" placeholder="Телефон">--}}
                    {{--<input type="submit" class="button-primary" value="Присоединиться">--}}
                {{--</form>--}}
            </div>
        </div>
    </section>
    <section id="about-company">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>о компании skynet</p>
                </div>
            </div>
            <div class="content row">
                <iframe width="444" height="250" src="https://www.youtube.com/embed/a59gmGkq_pw" frameborder="0" allowfullscreen></iframe>
                    <span>Товарищи! укрепление и развитие структуры обеспечивает широкому кругу (специалистов) участие в формировании системы обучения кадров, соответствует насущным потребностям. Повседневная практика показывает, что рамки и место обучения кадров представляет собой интересный эксперимент проверки форм развития.
                    <br>Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности требуют от нас анализа существенных финансовых и административных условий. Задача организации, в особенности же новая модель организационной деятельности играет важную роль в формировании новых предложений. Повседневная практика показывает, что консультация с широким активом позволяет оценить значение систем массового участия. Значимость этих проблем настолько очевидна, что рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
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
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
                    <li><img src="{{asset('assets/img/ex-logo.png')}}"></li>
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
                    <a href=""><img src="{{asset('assets/img/instagram.svg')}}"></a>
                    <a href=""><img src="{{asset('assets/img/vk.svg')}}"></a>
                    <a href=""><img src="{{asset('assets/img/twitter.svg')}}"></a>
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
                <li class="copyright">Биржа инвестиций SKYNET 2016</li>
                <li class="">О компании SKYNET</li>
                <li class="">Инвесторам</li>
                <li class="">Инвестиционным проектам</li>
            </ul>
        </div>
        <div class="container col-5 nav">
            <ul class="light">
                <li>Соглашения пользователя</li>
                <li>Вход в личный кабинет</li>
                <li>Контакты</li>
            </ul>
        </div>
        <div class="container col-5 tel">
            <ul class="light">
                <li><img src="{{asset('assets/img/phone.png')}}">8 (800) 555-35-35</li>
                <li><img src="{{asset('assets/img/phone.png')}}">+7 (999) 162-54-84</li>
            </ul>
        </div>
        <div class="container col-5 social">
            <ul class="social light">
                <li><img src="{{asset('assets/img/instagram.svg')}}"></li>
                <li><img src="{{asset('assets/img/vk.svg')}}"></li>
                <li><img src="{{asset('assets/img/twitter.svg')}}"></li>
            </ul>
        </div>
    </div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('plugins/slider/js/lightslider.js')}}"></script>
<script type="text/javascript">
    $(document).ready( function() {
        $('#partner').lightSlider({
            item:5,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                    }
                }
            ]
        });
    });
</script>
<script type="text/javascript">
    $('.menu-button').click(function() {
        $('.list').toggleClass('nav-active');
    });
</script>
</body>