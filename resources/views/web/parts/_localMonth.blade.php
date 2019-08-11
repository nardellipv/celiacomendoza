<section class="feature-sliders-items">
    <div class="features-food-slider">
        <div class="container">
            <div class="restaurent-food-titles">
                <h2>Negocios Recomendados</h2>
                <span class="title-style"></span>
                <p>CeliacosMendoza y usuarios finales sugieren los siguientes negocios por calidad y precio.</p>
            </div>
        </div>
        <div class="center-slider-food">
            <div class="container-fluid">
                <div class="row" style="margin-left: 25px;">
                    <div class="grid-slider">
                        @foreach($recommendeds as $recommended)
                            <div>
                                <div class="center-slider-column">
                                    <div class="img-overlay">
                                        <figure>

                                            @if($recommended->logo)
                                                {{--<img src="{{ asset('images/thumbnail/logo/'.($recommended->logo)) }}"--}}
                                                <img src="{{ $recommended->logo }}"

                                                     class="img-responsive"

                                                     alt="{{ $recommended->name }}">
                                            @else
                                                <img src="{{ asset('images/nodisp.png') }}"

                                                     class="img-responsive"

                                                     alt="{{ $recommended->name }}">
                                            @endif

                                        </figure>
                                    </div>
                                    <div class="center-slider-caption">
                                        <small class="cover-flg-title">Recomendado</small>
                                        <div class="item-rateing">
                                            <div class="inline-meta">
                                                @if($recommended->votes_positive)

                                                    <div class="rateing-starts">

                                                <span class="rateing-star-img"

                                                      style="width:{{($recommended->votes_positive * 100)/ ($recommended->votes_positive + $recommended->votes_negative)}}%;"></span>

                                                    </div>

                                                @else

                                                    <div class="rateing-starts">

                                                        <span class="rateing-star-img" style="width:0%;"></span>

                                                    </div>

                                                @endif
                                                <span>{{$recommended->votes_positive + $recommended->votes_negative}}
                                                    Votos </span>
                                            </div>

                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{url('catalogo', $recommended->slug)}}&t={{$recommended->name}}"
                                               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                                               target="_blank" title="Compartir en facebook"><i class="fa fa-share-alt"
                                                                                                aria-hidden="true"></i></a>

                                            <h5>{{ ucfirst(str_limit($recommended->name, 40)) }}</h5>
                                            <p><i class="fa icon-gps"
                                                  aria-hidden="true"></i>{{ $recommended->region->name }}
                                                - {{ $recommended->province->name }}</p>
                                        </div>
                                    </div>
                                    <div class="bottom-blog-caption">
                                        <a href="{{url('catalogo', $recommended->slug)}}" class="readmore-bt">Ir al Negocio <i class="fa fa-angle-right"
                                                                                    aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>