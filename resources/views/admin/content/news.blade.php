@extends('admin.layout.admin')

@section('content')
    <div class="row">
        <section class="content-header">
            <h1>Создание новостей</h1>
        </section>

        <section class="content">
            <div class="box-default box">
                <div class="box-header with-border">
                    Создать
                </div>

                <div class="box-body">
                    <form method="post" action="{{route('admin.create_news')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group @if($errors->has('title')) has-error @endif">
                                    <label>TITLE:</label>
                                    <input type="text" name="title" maxlength="255" class="form-control" value="{{old('title')}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('text')) has-error @endif">
                            <label>Text:</label>
                            <textarea name="text" class="form-control tinymce" rows="20">{{old('text')}}</textarea>
                        </div>

                        <div class="form-group ">
                            <div class="checkbox">
                                <label><input type="checkbox" name="for_auth" value="1" > Для авторизованных?</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Сохранить</button>

                    </form>
                </div>
            </div>
        </section>
        <div class="col-md-8 col-md-offset-2">

        </div>
    </div>
@stop

@section('scripts')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init(
                {
                    selector: '.tinymce',
                    plugins: [
                        'autolink lists link image charmap hr anchor pagebreak',
                        'searchreplace wordcount code',
                        'nonbreaking table contextmenu directionality',
                        'paste textcolor colorpicker'
                    ],
                    toolbar1: 'undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                    height : 400
                }
        );
    </script>
@stop
