<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Меню</li>
            <li class="active treeview">
                <a href="/panel">
                    <i class="fa fa-dashboard"></i> <span>Панель управления</span>
                </a>
            </li>
            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-credit-card"></i>--}}
                    {{--<span>Операции</span>--}}
                    {{--<span class="label label-primary pull-right">7</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="/panel/income"><i class="fa fa-circle-o"></i> Ввод</a></li>--}}
                    {{--<li><a href="/panel/draw"><i class="fa fa-circle-o"></i> Вывод</a></li>--}}
                    {{--<li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Быстрый старт</a></li>--}}
                    {{--<li><a href="/panel/frphistory"><i class="fa fa-circle-o"></i> <span--}}
                                    {{--class="label label-warning pull-right">{{$counts['frp']}}</span> Заявки на ФРП</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li>
                <a href="/panel/users">
                    <i class="fa fa-users"></i> <span>Пользователи</span>
                    {{--<small class="label pull-right bg-green"> {{$count_users}} </small>--}}
                </a>
            </li>

            {{--<li>--}}
                {{--<a href="/panel/news">--}}
                    {{--<i class="fa fa-newspaper-o"></i> <span>Создать новость</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="/user/profile">--}}
                    {{--<i class="fa fa-newspaper-o"></i> <span>В кабинет</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li>
                <a href="/auth/logout">
                    <i class="fa fa-sign-out"></i> <span>Выйти</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>