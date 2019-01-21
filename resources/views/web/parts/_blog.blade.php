@extends('layouts.blog')

@section('content')
    @foreach($posts as $post)
        <div class="blog heading">
            <h2><a href="{{ url('blog', $post->slug) }}">{{ $post->title }}</a></h2>
            <div class="blog-img">
                <img src="{{ asset('images/blog/'.$post->photo) }}" alt="image">
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