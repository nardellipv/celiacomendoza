<section class="event-featured section-ev">
    <div class="container">
        <div class="col-12 title-box text-center section-header">
            <h2 class="title"> Últimas entradas </h2>
        </div>

        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card card-event info-overlay featured">

                            <img alt="imagen blog" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="{{ asset('images/blog/'.$post->photo) }}">

                        <div class="card-body">
                            <h4 class="card-title"><a href="{{ url('blog', $post->slug) }}">{{ $post->title }}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div style="clear: both"></div>

    </div>
</section>