@extends('layouts.app')

@section('content')
    <div class="tabs">
        <div class="bg-front"></div>
        <div class="container">
            <div class="row">
                <ul>
                    <li class="this">Кабинет</li>
                    <li><a style="color: white"  href="{{route('history')}}">История операции</a></li>
                    {{--<li>Структура</li>--}}
                    {{--<li><a href="{{route('docs')}}">Документы</a></li>--}}
                    <li><a style="color: white" href="{{route('news')}}">Новости</a></li>
                </ul>
            </div>
        </div>
    </div>
    @if (count($errors))
        <ul>
            @foreach($errors->all() as $error)
                {{--// Remove the spaces between the brackets--}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <section id="profile-info">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Информация профиля</p>
                </div>
            </div>
            <div class="row account-info">
                <div class="col-4">
                    <div class="info-control">
                        <label>Фамилия</label>
                        <p>{{$user->lastname}}</p>
                    </div>
                    <div class="info-control">
                        <label>Имя</label>
                        <p>{{$user->firstname}}</p>
                    </div>
                    <div class="info-control">
                        <label>Skype</label>
                        <p>{{$user->skype}}</p>
                    </div>
                </div>

                <div class="col-4">
                    <div class="info-control">
                        <label>Телефон</label>
                        <p>{{$user->phone}}</p>
                    </div>
                    <div class="info-control">
                        <label>Email</label>
                        <p>{{$user->email}}</p>
                    </div>
                    <div class="info-control">
                        <label>Реферальная ссылка</label>
                        <p>{{$user->email}}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="bank-rek">
        <div class="container">
            @if(count($user->requisites))

                <div class="row">
                    <table>
                        <tr class="table-header">
                            <td>Фамилия Имя</td>
                            <td>Наименование банка</td>
                            <td>Номер карты</td>
                            <td>Регион филиала банка</td>
                            <td>Номер счета</td>
                            <td>Номер филиала</td>
                            <td>Адрес банка</td>
                            <td>ИНН</td>
                            <td>КПП</td>
                            <td>БИК</td>
                            <td>Расчетный номер</td>
                        </tr>

                        @foreach($user->requisites as $req)
                            <tr class="filled">
                                <td>{{$req->lastname}} {{$req->firstname}}</td>
                                <td>{{$req->bank_name}}</td>
                                <td>{{$req->card_number}}</td>
                                <td>{{$req->region}}</td>
                                <td>{{$req->bill_number}}</td>
                                <td>{{$req->bank_branch_number}}</td>
                                <td>{{$req->bank_address}}</td>
                                <td>{{$req->inn}}</td>
                                <td>{{$req->kpp}}</td>
                                <td>{{$req->bik}}</td>
                                <td>{{$req->checking_bill}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            @endif

            @if(!count($user->requisites))
                <div class="row add-button">
                    <a href="{{url('cabinet/add_reqs')}}" class="button-primary button-orange">Добавить банковские
                        реквизиты</a>
                </div>
            @endif
        </div>
    </section>
    <section id="parts" class="dark">
        <div class="container">
            <div class="row">
                <div class="title light">
                    <p>Доли</p>
                </div>
            </div>
            <div class="row content table-holder">
                <table>
                    <tr class="table-header second-color">
                        <td>Дата</td>
                        <td>Сумма</td>
                        <td>Количество долей</td>
                        <td>Дивиденды</td>
                        <td>Партнерские</td>
                        <td>Статус</td>
                    </tr>

                    @if(count($transactions))
                        @foreach($transactions as $one)
                            <tr class="table-filled light">
                                <td>{{$one->created_at->format('Y-m-d h:i')}}</td>
                                <td>{{$one->amount * 5000}}</td>
                                <td>{{$one->amount}}</td>
                                <td> Просчитывается</td>
                                <td>{{$user->a_money}}</td>
                                @if($one->status == \App\Transaction::STATUS_ACCEPTED)
                                    <td>Одобрен</td>
                                @else
                                    <td>В обработке..</td>
                                @endif
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div class="row">
                <div style="float: right;">
                    <button type="button" class="button-primary" disabled>Выплатить партнерские</button>
                    <button class="button-primary" disabled>Выплатить дивиденды</button>
                </div>
            </div>
            <br>
            <div class="row content">
                <div class="col chart">
                    <canvas id="partschart" width="300" height="300"></canvas>
                    {{--<div id="partschart" style="height: 300px;"></div>--}}
                </div>
                <div class="col">
                    <form id="buy" method="POST" action="{{url('/cabinet/buyshares')}}">
                        <input name="_token" value="{{csrf_token()}}" type="hidden">
                        <div class="form-control">
                            <label style="color: #fff;">Количество долей</label>
                            <input name="amount" style="color: #fff;" type="text" id="shares_amount" placeholder="0">
                        </div>
                        <div class="form-control">
                            <label style="color: #fff;">Сумма к оплате</label>
                            <input  style="color: #fff;" id="price_res" type="text" placeholder="0" readonly>
                        </div>
                        <div class="form-control">
                            <input type="submit" class="button-primary" placeholder="0">
                        </div>
                    </form>
                </div>
                {{--Реквизиты--}}
                <div class="col reks">
                    <div class="medtitle light">
                        <p>Реквизиты</p>
                    </div>
                    <div class="row no-padding light rek-table">
                        <div class="rek-control full">
                            <p class="head">Компания</p>
                            <p>Общество с Ограниченной Ответственностью "Капитал"</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">Адрес</p>
                            <p> 455044 Челябинская область, г. Магнитогорск пр. Карла Маркса 105/1</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">Банк</p>
                            <p>Р/С 40702810200020014533 Филиал номер 6602 Банка ВТБ 24 (ЗАО), г.Екатеренбург, пр. Ленина 27</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">Корректировочный счет</p>
                            <p> 3010181040000000090</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">БИК</p>
                            <p>046568905</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">Директор</p>
                            <p>Малашта Андрей Игоревич</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#shares_amount').keyup(function (data) {
                $('#price_res').val(+$(this).val() * +5000)
            });


            $.ajax({
                method: 'get',
                url: '/cabinet/ajax/parts',
                success: function (data) {

                    var ctx = $('#partschart');

                    Chart.defaults.global.defaultFontColor = '#fff';
                    var myPieChart = new Chart(ctx,{
                        type: 'pie',
                        data: {
                            labels: ['Осталось долей', 'Куплено долей'],
                            datasets: [
                                {
                                    data: [data.rest, data.used],
                                    backgroundColor: [
                                        "#0064dc",
                                        "#ff7336"
                                    ]

                                }
                            ]
                        },
                        options: {
                        }
                    });

                }
            });

        })
    </script>
@stop