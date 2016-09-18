@extends('layouts.app')

@section('content')
    <section id="table">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>Документы</p>
                </div>
            </div>
            <div class="row content">
                <div class="container">
                    <div class="row flex">
                        
                        <div class="item">
                            <a href="{{asset('docs/memo.docx')}}">
                                <img src="{{asset('all/assets/img/item.jpg')}}">
                                <p><span>Меморандум</span></p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')

@stop