<section class="event-category">
    <div class="container">
        <div class="col-xl-12 content-box ">
            <div class="row row-featured row-featured-category">
                <div class="col-xl-12  box-title no-border">
                    <div class="inner"><h2><span>Listado de locales y vendedores</span></h2>
                    </div>
                </div>
                @foreach($commerces as $commerce)
                    <div class="col-xl-2 col-md-3 col-sm-3 col-xs-4 f-category">
                        <a href="{{url('catalogo', $commerce->slug)}}">{{ str_limit($commerce->name,20) }}
                            <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}" class="img-responsive"
                                 alt="img">
                            <h6><i class="fa fa-map-marker-alt"></i> {{ $commerce->address }}
                                - {{ $commerce->region->name }} </h6></a>
                    </div>
                @endforeach
                <div class="pagination-bar">
                    <nav aria-label="Page navigation " class="d-inline-b">
                        {!! $commerces->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>