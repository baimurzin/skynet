@extends('admin.layout.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Заявки на рассмотрение
                        </h3>
                        <div class="box-body">
                            <div class="btn-group">
                                <button class="btn-success btn btn-sm disable-selected" onclick="return adminModule.approveSharesRequest(this);" data-approve_url="{{URL::route('approve_admin_requests','')}}">Одобрить</button>
                                <button class="btn-success btn btn-sm disable-selected" onclick="return adminModule.declineSharesRequests(this);" data-delete_url="{{URL::route('delete_admin_requests','')}}" >Отклонить</button>
                            </div>
                            <table id="userShareRequestTable"  data-url="{{URL::route('get_admin_requests')}}"></table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Выплатить дивиденды
                        </h3>
                        <div class="box-body">
                            <form id="dividendPayForm" data-pay_url="{{route('pay.dividends')}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="col-md-6">
                                    <input type="number" name="percent" placeholder="Процент от 0.01 до 1.00" class="form-control">
                                </div>
                                <div class="">
                                    <button type="button" class="btn btn-success" onclick="return adminModule.payDividends(this);">Рассчитать</button>
                                </div>
                            </form>
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
            adminModule.initUserShareRequestTable();
        })
    </script>
@stop