@extends('layouts.main')

@section('meta-description','👉 Enterate de lo último en temas de celiaquia. Publicamos contenido semanalmente para que celíacos Mendocinos este actualizados constantemente.')

@section('content')
    <div class="content">
        <section class="food-grid-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        @include('web.parts._asideBlog')
                    </div>
                    <div class="col-md-8">
                        @foreach($posts as $post)
                            <div class="food-blog-01-columns only-hover">
                                <figure>
                                    <div class="img-angles">
                                        <img src="{{ asset('images/blog/'.$post->photo) }}" alt="{{ $post->title }}">
                                    </div>
                                </figure>
                                <div class="caption-style-v1 ">
                                    <h6>{{ str_limit($post->title,50) }}</h6>
                                    <p>{!! str_limit($post->body, 150) !!}</p>
                                    <span><i class="fa fa-calendar-o" aria-hidden="true"></i>{{ Date::parse($post->created_at)->diffForHumans() }}</span>
                                    <a href="{{ url('blog', $post->slug) }}">leer más</a>
                                </div>
                            </div>
                        @endforeach

                        <div class="pagination-list">
                            <ul>
                                {{ $posts->render() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection