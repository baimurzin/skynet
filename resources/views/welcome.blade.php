<!DOCTYPE html>
<head>
    <title>SKYNET</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('plugins/slider/css/lightslider.css')}}">
</head>
<body>
<nav>
    <div class="container">
        <div class="row flexible">
            <div class="logo">
                <p>SKYNET</p>
            </div>
            <ul>
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
                <iframe width="444" height="250" src="https://www.youtube.com/embed/a59gmGkq_pw" frameborder="0"
                        allowfullscreen></iframe>
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
                    <li><img src="assets/img/ex-logo.png"></li>
                    <li><img src="assets/img/ex-logo.png"></li>
                    <li><img src="assets/img/ex-logo.png"></li>
                    <li><img src="assets/img/ex-logo.png"></li>
                    <li><img src="assets/img/ex-logo.png"></li>
                    <li><img src="assets/img/ex-logo.png"></li>
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
@include('components.footer')
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="{{asset('plugins/slider/js/lightslider.js')}}"></script>
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
                        slideMargin: 6,
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
</body>