@extends('layouts.app')

@section('content')
    <div class="tabs">
        <div class="bg-front"></div>
        <div class="container">
            <div class="row">
                <ul>
                    <li class="this">Главная</li>
                    <li>История операции</li>
                    <li>Структура</li>
                    <li>Документы</li>
                    <li>Новости</li>
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
                            <td>Банк</td>
                            <td>Номер карты</td>
                            <td>Регион</td>
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
                                <td>{{$one->amount * 5}}</td>
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
            <div class="row content">
                <div class="col chart">
                    <div id="partschart" style="height: 300px;"></div>
                </div>
                <div class="col">
                    <form id="buy" method="POST" action="{{url('/cabinet/buyshares')}}">
                        <input name="_token" value="{{csrf_token()}}" type="hidden">
                        <div class="form-control">
                            <label>Количество долей</label>
                            <input name="amount" type="text" id="shares_amount" placeholder="0">
                        </div>
                        <div class="form-control">
                            <label>Сумма к оплате</label>
                            <input id="price_res" type="text" placeholder="0" readonly>
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
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
                        </div>
                        <div class="rek-control">
                            <p class="head">КПП</p>
                            <p>1234567891343</p>
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
                    new Morris.Donut({
                        element: 'partschart',
                        data: [
                            {label: "Осталось долей", value: data.rest},
                            {label: "Куплено долей", value: data.used}
                        ]
                    });
                }
            });

        })
    </script>
@stop