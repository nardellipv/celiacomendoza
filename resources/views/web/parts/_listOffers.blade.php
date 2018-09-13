<div id="offers" class="col-xl-12 content-box ">
    <div class="row row-featured">
        <div class="col-xl-12  box-title" style="background-color: #16a085;">
            <div class="inner"><h2><span>Nuestras </span> Ofertas </h2>
            </div>
        </div>

        <div style="clear: both"></div>

        <div class=" relative  content featured-list-row  w100">

            <nav class="slider-nav has-white-bg nav-narrow-svg">
                <a class="prev">
                    <span class="nav-icon-wrap"></span>
                </a>
                <a class="next">
                    <span class="nav-icon-wrap"></span>
                </a>
            </nav>
            @if(count($offers) <= 0)
                <h3 class="text text-center">Sin Ofertas</h3>
            @endif
             <div class="no-margin featured-list-slider ">
            @foreach($offers as $offer)
                    <div class="item"><a href="{{ url('producto', array($commerce->id, $offer->id)) }}">
                     <span class="item-carousel-thumb">
                    	<img src="{{ asset('images/thumbnail/products/'.($offer->photo)) }}">
                     </span>
                            <span class="item-name"> {{ $offer->name }} </span>
                            @if(!$offer->offer)
                                <span class="price">$ {{ $offer->price }}</span>
                            @else
                                <span class="price"><del>$ {{ $offer->price }}</del></span>
                                <span class="price">$ {{ $offer->offer }}</span>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
