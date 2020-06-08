


<h2>Добро пожаловать, {{\Auth::user()->email}}</h2>
<br>
<a href="/"> На сайт</a><br>
@if(\Auth::user()->isAdmin == 1)
    <a href="{{ route('admin') }}">Админ панель</a><br>
@endif
<a href="{{ route('logout')  }}">Выйти</a>
