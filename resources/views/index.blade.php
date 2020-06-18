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
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{!! route('blog.show', [
                       'id'   => $article->id,
                       'slug' => str_slug($article->title)
                    ]) !!}">
                            <h2 class="post-title">
                               {!! $article->title !!}
                            </h2>
                            <h3 class="post-subtitle">
                               {!! $article->short_text !!}
                            </h3>
                        </a>
                        <p class="post-meta">Опубликоал
                            <a href="#">{{$article->author}}</a>
                            в {!! $article->created_at->format('H:i- d/m/Y') !!}</p>
                    </div>
                @endforeach
            <!-- Pager -->
                    <div class="pagination col-lg-12 col-md-12 col-sm-12 text-center">
                        <ul class="pagination" role="navigation">
                            {{$articles->links()}}
                        </ul>
                    </div>


            </div>
        </div>
    </div>

@stop

