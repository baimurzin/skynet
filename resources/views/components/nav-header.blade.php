<nav>
    <div class="container">
        <div class="row flexible">
            <div class="logo">
                <a style="text-decoration: none;" href="/cabinet"><p>SKYNET</p></a>
            </div>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="cabinet/news">Новости</a></li>
                <li><a href="/about">Проект</a></li>
                <li><a href="/documents">Документы</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="/auth/logout">Выйти</a></li>
                @else
                    <li><a href="/auth/login">Войти</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>