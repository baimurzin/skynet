@extends('layouts.app')

@section('content')
    <section id="reg">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Вход в личный кабинет</p>
                </div>
            </div>
            <div class="row content">
                @if (count($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                            // Remove the spaces between the brackets
                            <li>{ { $error } }</li>
                        @endforeach
                    </ul>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="subtitle">
                            <p>Данные для входа:</p>
                        </div>
                        <div class="form-control">
                            <label>Почта:</label>
                            <input name="email" type="text" placeholder="email@example.com">
                        </div>
                        <div class="form-control">
                            <label>Пароль:</label>
                            <input name="password" type="text" placeholder="********">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-control">
                            <input type="submit" class="button-primary" value="Войти">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop

@section('scripts')

@stop