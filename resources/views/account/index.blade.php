
@extends('layouts.user')



<h2>Добро пожаловать, {{\Auth::user()->username}}</h2>
<br>
<a href="/" class="btn btn-success"> На сайт</a>
<br>   <br>
@if(\Auth::user()->isAdmin == 1)
    <a href="{{ route('admin') }} "class="btn btn-success" >Админ панель</a>
@endif
<br>   <br>
<a href="{{ route('logout')  }} "class="btn btn-success">Выйти</a>
