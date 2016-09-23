@extends('layouts.app')

@section('content')
    <div class="tabs">
        <div class="bg-front"></div>
        <div class="container">
            <div class="row">

                <ul>
                    <li><a style="color: white"  href="/cabinet">Кабинет</a></li>
                    <li class="this"><a style="color: white"  href="{{route('history')}}">История операции</a></li>
                    {{--<li>Структура</li>--}}
                    {{--<li><a href="{{route('docs')}}">Документы</a></li>--}}
                    <li><a style="color: white" href="{{route('news')}}">Новости</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="table">
        <div class="container">

            <div class="row content">
                <div class="col-6">
                    <div class="midtitle">
                        <p>История взносов</p>
                    </div>
                    <table data-url="{{URL::route('history.transact')}}" id="transactTable" class="full"></table>
                </div>

                <div class="col-6">
                    <div class="midtitle">
                        <p>История выводов</p>
                    </div>
                    <table data-url="{{URL::route('history.withdraw')}}" id="withdrawTable" class="full"></table>
                </div>


            </div>
            <div class="row content">
                <div class="col-6">
                    <div class="midtitle">
                        <p>История партнерских начислений</p>
                    </div>
                    <table data-url="{{URL::route('history.invoice')}}" id="invoiceTable" class="full"></table>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            commonModule.initInvoiceTable();
            commonModule.initTransactTable();
        })
    </script>
@stop