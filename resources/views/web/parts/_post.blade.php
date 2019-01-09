@extends('layouts.blog')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="blog heading">
                    <h2>{{ $post->title }}</h2>

                    <div class="blog-img">
                        <img src="{{ asset('images/blog/' . $post->photo) }}" alt="{{ $post->title }}">
                    </div>

                    <div class="blog-detail">
                        <ul class="blog-admin">
                            <li><i class="fa fa-clock-o"></i><a
                                        href="#"> {{ Date::parse($post->created_at)->diffForHumans() }}</a></li>
                        </ul>
                        <p>{!! $post->body !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection