@extends('layouts.blog')

@section('content')
    <div class="section-content">
        <div class="row ">
            <div class="col-sm-12 blogLeft">
                <div class="blog-post-wrapper">


                    <article class="blog-post-item">
                        <div class="inner-box">


                            <!--blog image-->
                            <div class="blog-post-img">

                                <a href="#">
                                    <figure>
                                        <img class="img-responsive" alt="blog-post image"
                                             src="{{ asset('images/blog/' . $post->photo) }}">
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
                                    <h2>{{ $post->title }}</h2>
                                    <div class="blog-article-text">
                                        <p>{!! $post->body !!}</p>
                                    </div>
                                </div>


                                <div class="clearfix">
                                        <div class="addthis_inline_share_toolbox_iswp"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

@endsection