@extends('layouts.app')

@section('content')
    <section id="table">
        <div class="container">
            <div class="row">
                <div class="title">
                    <p>История операций</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-6">
                    <div class="midtitle">
                        <p>История партнерских</p>
                    </div>
                    <table data-url="{{URL::route('history.invoice')}}" id="invoiceTable" class="full"></table>
                </div>
                <div class="col-6">
                    <div class="midtitle">
                        <p>История выводов</p>
                    </div>
                    <table data-url="{{URL::route('history.transact')}}" id="transactTable"  class="full"></table>
                </div>
            </div>
            <div class="row content">
                <div class="col-6">
                    <div class="midtitle">
                        <p>Историяя взносов</p>
                    </div>
                    <table data-url="{{URL::route('history.withdraw')}}" id="withdrawTable" class="full"></table>

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