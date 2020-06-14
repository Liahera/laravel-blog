@extends('layouts.app')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/contact-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Страница Контактов</h1>
                        <h2 class="subheading"></h2>
                        <span class="meta">
                        <a>      </a>
                         </span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
<h1>Связаться со мной</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}

            </div>
        @endif
        <form action="{{route('contact_submit')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
            </div>


            <div class="form-group">
                <label for="email">Введите email</label>
                <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
            </div>


            <div class="form-group">
                <label for="subject">Тема сообщения</label>
                <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
            </div>

            <div class="form-group">
                <label for="message">Сообщение</label>
                <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Отправить</button>
        </form>

    </div>

@stop
