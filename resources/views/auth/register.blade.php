@extends('layouts.app')

@section('content')
    <section id="reg">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Регистрация</p>
                </div>
            </div>
            @if (count($errors))
                <ul class="list-group" style="list-style: none;">
                    @foreach($errors->all() as $error)
                        <li class="exception">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="row content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="subtitle">
                            <p>Данные для регистрации:</p>
                        </div>
                        <div class="form-control">
                            <label>Имя:</label>
                            <input type="text" name="firstname" value="{{\Illuminate\Support\Facades\Input::get('firstname')}}" placeholder="Иван">
                        </div>
                        <div class="form-control">
                            <label>Фамилия:</label>
                            <input type="text" name="lastname" placeholder="Иванов">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <label>Телефон:</label>
                            <input type="tel" name="phone" value="{{\Illuminate\Support\Facades\Input::get('phone')}}" placeholder="+7 (000) 000-00-00">
                        </div>
                        <div class="form-control">
                            <label>Email:</label>
                            <input type="email" name="email" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <label>Skype:</label>
                            <input type="text" name="skype" placeholder="Your skype here">
                        </div>
                        <div class="form-control">
                            <label>Реферальная ссылка:</label>
                            <input type="text" name="referer" placeholder="email@example.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <label>Пароль </label>
                            <input type="password" name="password" placeholder="******">
                        </div>
                        <div class="form-control">
                            <label>Пароль еще раз: </label>
                            <input type="password" name="password_confirmation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="submit" class="button-primary" value="Продолжить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop


@section('scripts')

@stop