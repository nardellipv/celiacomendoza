@extends('layouts.blog')

@section('meta-description','👉 Enterate de lo último en temas de celiaquia. Publicamos contenido semanalmente para que celíacos Mendocinos este actualizados constantemente.')

@section('content')
    @foreach($posts as $post)
        <div class="blog heading">
            <h1 style="color: black;font-size: 30px;"><a href="{{ url('blog', $post->slug) }}">{{ $post->title }}</a></h1>
            <div class="blog-img">
                <img src="{{ asset('images/blog/'.$post->photo) }}" alt="$post->title">
            </div>
            <div class="blog-detail">
                <ul class="blog-admin">
                    <li><i class="fa fa-clock-o"></i><a href="#"> {{ Date::parse($post->created_at)->diffForHumans() }}</a></li>
                </ul>
                <p>{!! str_limit($post->body, 200) !!} </p>
                <a href="{{ url('blog', $post->slug) }}" class="blog-btn">Leer mas</a>
            </div>
        </div>
    @endforeach

    <div class="bs-example" data-example-id="disabled-active-pagination">
        <nav aria-label="...">
            <ul class="pagination">
                {{ $posts->render() }}
            </ul>
        </nav>
    </div>
@endsection