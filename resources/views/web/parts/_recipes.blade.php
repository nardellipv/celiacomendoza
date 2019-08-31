@extends('layouts.main')

@section('title', '📑 Recetas creadas por otros celíacos')

@section('meta-description','👉 Recetas para celíacos faciles de preparar y creadas totalmente por la comunidad 👍')

@section('content')

    <div class="content">
        <section class="food-grid-view">
            <div class="container">

                <div class="row">

                    @foreach($recipes as $recipe)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="restrurent-grid-columns only-hover">
                                <figure>
                                    <img src="{{ asset('images/thumbnail/recetas/'.$recipe->photos) }}"
                                         class="img-responsive" alt="{{ $recipe->name }}">
                                </figure>
                                <div class="caption-food-blog">
                                    <span><i class="fa fa-user" aria-hidden="true"></i>{{ $recipe->user->name }}</span>
                                    <span><i class="fa fa-calendar-plus-o"
                                             aria-hidden="true"></i>{{ Date::parse($recipe->created_at)->ago() }}</span>
                                    <span><i class="fa fa-cutlery" aria-hidden="true"></i>{{ $recipe->category->name }}</span>
                                    <a href="{{ url('recetas', $recipe->slug) }}">
                                        <h5>{{ $recipe->name }}</h5>
                                    </a>
                                    <p>{!! str_limit($recipe->ingredients,85) !!}</p>
                                </div>
                                <div class="bottom-blog-caption">
                                    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>{{ $recipe->likes }}</a>
                                    <a href="{{ url('recetas', $recipe->slug) }}" class="readmore-bt">Ver Receta...<i
                                                class="fa fa-angle-right"
                                                aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pagination-list">
                <ul>
                    {{ $recipes->render() }}
                </ul>
            </div>

            <script data-cfasync='false' type='text/javascript'
                    src='//p361587.clksite.com/adServe/banners?tid=361587_708467_0'></script>
        </section>
    </div>

@endsection