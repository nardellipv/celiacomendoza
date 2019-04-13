@extends('layouts.main')

@section('title', 'Post ' . $post->title)
@section('meta-description', '✍ Noticia sobre ' . $post->title)

@section('content')
    <div class="content">
        <section class="food-leftside-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="food-aticles">
                            <figure>
                                <img src="{{ asset('images/blog/' . $post->photo) }}" alt="{{ $post->title }}">
                            </figure>
                            <div class="food-aticle-caption">
                                <div class="simple-tag-cp">
                                    <h4 class="title-heading">{{ $post->title }}</h4>
                                    <a href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>{{ Date::parse($post->created_at)->diffForHumans() }}</a>
                                </div>
                                <div class="food-blockquote-paragraph">
                                    <p>{!! $post->body !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @include('web.parts._asideBlog')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection