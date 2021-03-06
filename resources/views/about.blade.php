@extends('layouts.app')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/blog/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>Страница про нас</h1>
                        <h2 class="subheading"></h2>
                        <span class="meta">
                        <a>     </a>
                         </span>
                    </div>
                </div>

            </div>

        </div>

    </header>

    <article>

        <div class="container">
            <div class="row">
                @foreach($abouts as $about)
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!!  $about->full_text!!}
                </div>
                @endforeach
            </div>
        </div>

    </article>




    @stop
