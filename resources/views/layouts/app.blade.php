<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Serhii Liahera</title>

    <!-- Bootstrap core CSS -->
    <link href="/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/blog/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="/blog/css/clean-blog.css?v=1.2" rel="stylesheet">
    <link href="/css/style.css?v=1.2" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="header-menu">
        <a class="navbar-brand" href="/">Сайт</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('contact') !!}">Контакти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! route('about') !!}">О нас</a>
                </li>

            </ul>
            @if(\Auth::user() == null)
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{!! route('register') !!}">Регистрация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{!! route('login') !!}">Логин</a>
            </li>
            </ul>
            @endif
            @if(\Auth::user() != null)
            <ul class="navbar-nav">
                <li class="main-li nav-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            {{ \Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu dropdown-user-info" role="menu">
                        <li class="nav-item">
                            @if(\Auth::user() != null)
                                @if(\Auth::user()->isAdmin == \App\User::ADMIN_ROLE)
                                    <a class="nav-link" href="{!! route('admin') !!}">В админку</a>
                                @endif
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! route('logout') !!}">Выйти</a>
                        </li>

                    </ul>
                </li>
            </ul>
                @endif




        </div>
    </div>
</nav>
@yield('content')
<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="https://t.me/LiaheraSerhii">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-telegram fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/LiaheraSerhii">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://github.com/Liahera">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    <li class="list-inline-item">
                        <a href="mailto:311.lsr@gmail.com">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-mail-forward fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>

                </ul>
                <p class="copyright text-muted"> &copy; Liahera Serhii 2020</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->

<script src="/blog/vendor/jquery/jquery.min.js"></script>
<script src="/blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script>tinymce.init({selector:'textarea'});</script>
<!-- Custom scripts for this template -->
<script src="/blog/js/clean-blog.min.js"></script>

</body>

</html>

