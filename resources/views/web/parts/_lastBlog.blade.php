<section>
    <div class="container">
        <div class="restaurent-food-titles">
            <h2>Últimas Noticias</h2>
            <span class="title-style"></span>
            <p>Lea las últimas noticias en el mundo de la celiaquia.</p>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 col-sm-6 col-sm-12">
                    <div class="restrurent-grid-columns only-hover">
                        <figure>
                            <img src="{{ asset('images/blog/'.$post->photo) }}" alt="{{ $post->title }}" class="img-responsive">
                        </figure>
                        <div class="caption-food-blog">
                            <span><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>{{ Date::parse($post->created_at)->format('j/m/Y') }}</span>
                            <a href="{{ url('blog', $post->slug) }}"><h5>{{ $post->title }}</h5></a>
                            <p>{!! str_limit($post->body, 150) !!}</p>
                        </div>
                        <div class="bottom-blog-caption">
                            <a href="{{ url('blog', $post->slug) }}" class="readmore-bt">Leer Más<i class="fa fa-angle-right"
                                                                                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>