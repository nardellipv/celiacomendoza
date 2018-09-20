@extends('layouts.blog')

@section('content')
    @foreach($posts as $post)
        <article class="blog-post-item">
            <div class="inner-box">


                <!--blog image-->
                <div class="blog-post-img">

                    <a href="{{ url('blog', $post->slug) }}">
                        <figure>
                            <img class="img-responsive" alt="blog-post image"
                                 src="{{ asset('images/blog/'.$post->photo) }}">
                        </figure>
                    </a>
                </div>

                <!--blog content-->

                <div class="blog-post-content-desc">
                            <span class="info-row blog-post-meta">
                                <span class="date">
                                    <i class=" icon-clock"> </i>
                                    {{ Date::parse($post->created_at)->format('d/m/Y H:m') }}
                                </span>
                            </span>
                    <div class="blog-post-content">
                        <h2><a href="{{ url('blog', $post->slug) }}">{{ $post->title }}</a></h2>

                        <p>{!! str_limit($post->body, 200) !!}</p>

                        <div class="row">
                            <div class="col-md-12 clearfix blog-post-bottom">
                                <a class="btn btn-primary  pull-left" href="{{ url('blog', $post->slug) }}">Leer Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
    {{ $posts->render() }}
@endsection