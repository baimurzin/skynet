@extends('admin.layout.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            История ввода
                        </h3>
                        <div class="box-body">
                            <table id="incomeTable" data-url="{{URL::route('admin.get_income_list')}}"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script>
        $(document).ready(function () {
            adminModule.initIncomeTable();
        });
    </script>
@stop