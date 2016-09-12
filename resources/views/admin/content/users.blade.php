@extends('admin.layout.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Пользователи
                        </h3>
                        <div class="box-body">
                            <table id="usersTable"  data-url="{{URL::route('get_users_list')}}"></table>
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
            adminModule.initUsersTable();
        });
    </script>
@stop