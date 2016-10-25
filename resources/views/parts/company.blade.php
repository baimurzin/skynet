@extends('layouts.app')

@section('content')
    <div id="main">
        <section id="about-company-page">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <p>о компании skynet</p>
                    </div>
                </div>
                <div class="content row">
                    <div class="half-row">
                        <p class="subtitle">НАША ЦЕЛЬ</p>
                        <p>Мы ставим для себя целью стать крупнейшей краудинвестиноговой площадкой в сфере действующего высокодоходного бизнеса, минимизируя при этом риски от инвестирования. Наша задача дать частному инвестору надежный и прибыльный проект в уже работающем сегменте бизнеса. 
                        </p>
                    </div>
                    <div class="half-row">
                        <p class="subtitle">ИДЕОЛОГИЯ</p>
                        <p>Предоставить каждому инвестору, вне зависимости от его образования, положения в обществе, статуса и возраста, инструмент создания капитала, благодаря которому человек может развиваться, путешествовать, формируя тот мир, в котором хочется жить.
                        </p>
                    </div>
                    <div class="row">
                        <p class="subtitle">НАШ СЕРВИС ЭТО</p>
                        <ul class="about-ul">
                            <li>
                                <img src="{{asset('all/assets/img/time.svg')}}">
                                <span>Круглосуточная поддержка партнеров
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/graduate.svg')}}">
                                <span>Высокий профессионализм руководства
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/flag.svg')}}">
                                <span>Соблюдение законов РФ и мировых стандартов ведения бизнеса
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/search.svg')}}">
                                <span>Прозрачная деятельность каждого проекта в рамках площадки
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/team.svg')}}">
                                <span>Индивидуальные условия для партнеров проекта
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/cityscape.svg')}}">
                                <span>Возможность стать официальным представителем компании в городе, областе или стране
                                </span>
                            <li>
                                <img src="{{asset('all/assets/img/notebook.svg')}}">
                                <span>Четкое видение дальнейшего развития компании
                                </span>
                            </li>
                        </ul>
                        <p class="subtitle">ПЕРСПЕКТИВЫ РАЗВИТИЯ</p>
                        <ul class="features-ul">
                            <li>
                                <img src="{{asset('all/assets/img/plant.svg')}}">
                                <span>Создание собственной криптовалюты</span>
                            </li>
                            <li>
                                <img src="{{asset('all/assets/img/smartphone.svg')}}">
                                <span>Выход на работу по технологии BLOCKHAIN</span>
                            </li>
                            <li>
                                <img src="{{asset('all/assets/img/moscow.svg')}}">
                                <span>Проекты совместно с правительством Российской Федерации</span>
                            </li>
                        </ul>
                        <p><a href="/auth/register"><button class="button-primary" style="display:block; margin:auto;">Зарегистрироваться</button></a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@stop


@section('scripts')

@stop