@extends('layouts.app')

@section('content')
    <section id="table">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Новости</p>
                </div>
            </div>
            <div class="row content news">
                @if (count($news) > 0)
                    @foreach($news as $one)
                        <div class="news-item">
                            <p class="news-title">{{$one->title}}</p>
                            <p class="news-text">{!! $one->text !!}</p>
                            {{--<button class="button-primary">Читать далее</button>--}}
                            <p class="news-date">{{$one->created_at->format('Y-m-d')}}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@stop

@section('scripts')

@stop
