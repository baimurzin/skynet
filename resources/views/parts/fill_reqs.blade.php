@extends('layouts.app')

@section('content')
    <section id="reg">
        <div class="container">
        </div>
        <div class="row content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/cabinet/add_reqs') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div class="subtitle">
                        <p>Данные для таблицы:</p>
                    </div>
                    <div class="form-control">
                        <label>Фамилия:</label>
                        <input type="text" name="lastname" placeholder=" Иванов">
                    </div>

                    <div class="form-control">
                        <label>Имя:</label>
                        <input type="text" name="firstname" placeholder="Иван">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <label>Номер карты:</label>
                        <input type="text" name="card_number" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="form-control">
                        <label>Регион:</label>
                        <input type="text" name="region" placeholder="РТ">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <label>Номер счёта:</label>
                        <input type="text" name="bill_number" placeholder="0000 0000 0000 0000">
                    </div>
                    <div class="form-control">
                        <label>Номер филиала:</label>
                        <input type="text" name="bank_branch_number" placeholder="123">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <label>Адрес банка:</label>
                        <input type="text" name="bank_address" placeholder="РФ, РТ, г.Казань, ул. Кремлевская, д.31">
                    </div>
                    <div class="form-control">
                        <label>ИНН:</label>
                        <input type="text" name="inn" placeholder="1234567890123">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <label>КПП:</label>
                        <input type="text" name="kpp" placeholder="1234567890123">
                    </div>
                    <div class="form-control">
                        <label>БИК:</label>
                        <input type="text" name="bik" placeholder="1234567890123">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <label>Расчетный счет:</label>
                        <input type="text" name="checking_bill" placeholder="1234567890123">
                    </div>
                    <div class="form-control">
                        <label>Банк:</label>
                        <input type="text" name="bank_name" placeholder="Сбербанк">
                    </div>
                </div>
                <div class="row">
                    <div class="form-control">
                        <input type="submit" class="button-primary" value="Добавить">
                    </div>

                </div>
            </form>
        </div>
    </section>
@stop

@section('scripts')
@stop