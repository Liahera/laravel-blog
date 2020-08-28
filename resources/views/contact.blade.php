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
                        <a>    </a>
                         </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container-row">
<div class="container-map">
    <h1>Моя геолокация</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59877.76249321136!2d18.60646360953683!3d54.37924525886458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd74982458b837%3A0x96bf68ff438978af!2sGdansk%20University%20of%20Technology%20Dormitory%20No.%209!5e0!3m2!1sru!2spl!4v1592645209956!5m2!1sru!2spl" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
    <div class="container-form">
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
    </div>

@stop
