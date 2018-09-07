<section class="event-category">
    <div class="container">
        <div class="col-12 title-box text-center section-header">
            <h2 class="title">Listado de locales</h2>
        </div>
        <div class="row">
            @foreach($commerces as $commerce)
            <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                <div class="card card-event info-overlay overlay-visible card-category">
                    <div class="img has-background"
                         style="background-size:cover ">
                        <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                             src="images/thumbnail/{{$commerce->logo}}">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{url('catalogo', $commerce->id)}}">{{ $commerce->name }}</a>
                        </h4>
                        <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>
                        <div class="card-event-info">
                            <p class="event-location"><i class="fa icon-location-1"></i>
                                <a class="location" href="">{{ $commerce->address }} </a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>