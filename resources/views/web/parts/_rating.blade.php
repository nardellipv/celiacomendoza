<section class="gallery_bg">
    <div class="container">
        <div class="restaurent-food-titles">
            <h2>Locales destacados</h2>
            <span class="title-style"></span>
            <p>Felicitamos a <b>{{ $ratingVote->name }}</b> por ser el local con mayor cantidad de votos positivos y
                a <b>{{ $ratingVisit->name }}</b> por tener la mayor cantidad de visitas.
            Estos locales se encuentran como destacados gracias a los usuarios finales que participan visitando y votando a cada
                local registrado.</p>
        </div>
        <div class="rest-food-gallery">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
                    @include('web.parts.alerts.successVote')

                    @include('web.parts.alerts.error')
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="food-gallery-img demo-gallery02">
                                <h5 class="text-center">Local con mayor votos</h5>
                                <figure>
                                    @if($ratingVote->logo)
                                        <img src="{{ asset('images/thumbnail/logo/'.($ratingVote->logo)) }}"

                                             class="img-responsive"

                                             alt="{{ $ratingVote->name }}">
                                    @else
                                        <img src="{{ asset('images/nodispLogoCeliaco.png') }}"

                                             class="img-responsive"

                                             alt="{{ $ratingVote->name }}">
                                    @endif
                                </figure>
                                <div class="food-gallery-caption">
                                    <small>{{ $ratingVote->region->name }} - {{ $ratingVote->province->name }}</small>
                                    <h2>{{ $ratingVote->name }}</h2>
                                    <h6 style="color: white">{{$ratingVote->votes_positive + $ratingVote->votes_negative}}
                                        Votos</h6>
                                    <ul class="show-off-icon">
                                        <li><a href="{{url('catalogo', $ratingVote->slug)}}"><i class="fa fa-link"></i></a>
                                        </li>
                                        <li><a href="{{ route('positive', $ratingVote->slug) }}"><i
                                                        class="fa fa-thumbs-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="food-gallery-img demo-gallery02">
                                <h5 class="text-center">Local con mayor visitas</h5>
                                <figure>
                                    @if($ratingVisit->logo)
                                        <img src="{{ asset('images/thumbnail/logo/'.($ratingVisit->logo)) }}"

                                             class="img-responsive"

                                             alt="{{ $ratingVisit->name }}">
                                    @else
                                        <img src="{{ asset('images/nodispLogoCeliaco.png') }}"

                                             class="img-responsive"

                                             alt="{{ $ratingVisit->name }}">
                                    @endif
                                </figure>
                                <div class="food-gallery-caption">
                                    <small>{{ $ratingVisit->region->name }} - {{ $ratingVisit->province->name }}</small>
                                    <h2>{{ $ratingVisit->name }}</h2>
                                    <h6 style="color: white">{{ $ratingVisit->visit }} Visitas</h6>
                                    <ul class="show-off-icon">
                                        <li><a href="{{url('catalogo', $ratingVisit->slug)}}"><i class="fa fa-link"></i></a>
                                        </li>
                                        <li><a href="{{ route('positive', $ratingVisit->slug) }}"><i
                                                        class="fa fa-thumbs-up"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
