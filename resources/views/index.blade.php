@extends('layouts.app')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Blog by Serhii Liahera</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                man must explore,and
                            </h2>
                            <h3 class="post-subtitle">
                                problem look
                            </h3>
                        </a>
                        <p class="post-meta">Опубликоал
                            <a href="#">start bootstrap</a>
                            </p>
                    </div>




                <hr>
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

@stop