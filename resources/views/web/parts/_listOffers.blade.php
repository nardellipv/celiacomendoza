<section style="background-color: #af5316 !important; padding-top: 30px; padding-bottom: 35px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-8 col-md-offset-2">
                <div class="heading heading-3 text-center mb-0">
                    <div class="heading-bg">
                        <p class="mb-0">¿Estás buscando ofertas?</p>
                        <h2>Nuestras Ofertas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="shop-banner" class="shop-banner bg-gray pb-1">
    <div class="container">
        @foreach($offers as $offer)
            <div class="col-xs-12 col-sm-6 col-md-4 banner banner-2">
                <div class="banner-panel mb-30">
                    <div class="banner-img">
                        <img class="img-responsive" src="{{asset('webStyle/images/shop/standard/banner-2.jpg')}}"
                             alt="shop banner">
                        <div class="banner-hover">
                            <div class="banner-bio">
                                <div class="banner-dicount">$ {{ $offer->price }}</div>
                                <h5><a href="{{ url('producto', array($commerce->id, $offer->id)) }}">{{ $offer->name }}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>