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
                            <a href="{{asset('docs/memo.docx')}}" target="_blank">
                                <img src="{{asset('all/assets/img/memorandym.jpg')}}">
                                <p><span>Меморандум</span></p>
                            </a>

                        </div>
						<div class="item">
                            <a href="{{asset('docs/dogovordolevogoinvestirovaniya.pdf')}}" target="_blank">
                                <img src="{{asset('all/assets/img/dogodoli.png')}}">
                                <p><span>Договор дол.инвес-ия</span></p>
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