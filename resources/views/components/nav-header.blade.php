<nav>
    <div class="container">
        <div class="row flexible">
            <div class="logo">
                <p>SKYNET</p>
            </div>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/news">Новости</a></li>
                <li><a href="/about">Проект</a></li>
                <li><a href="/docs">Документы</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li><a href="/auth/logout">Выйти</a></li>
                @else
                    <li><a href="/auth/login">Войти</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>