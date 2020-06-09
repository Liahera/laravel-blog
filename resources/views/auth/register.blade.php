
@extends('layouts.user')

@section('content')
<div class="container">
    <form class="form-signin" method="post">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Пожалуйста зарегистрируйтесь</h2>
        <label for="username" class="sr-only">Имя</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Имя" required autofocus>
        <label for="inputEmail" class="sr-only">Email адрес</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email адрес" required autofocus>
        <label for="inputPassword" class="sr-only">Пароль</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Пароль" required>
        <label for="inputPassword" class="sr-only">Повторите пароль</label>
        <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Повторите пароль" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" value="1" >  Запомнить
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Регистрация</button>
    </form>

</div> <!-- /container -->

@include('inc.messages')
@endsection
