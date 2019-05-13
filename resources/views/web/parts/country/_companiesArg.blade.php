@extends('layouts.main')
@section('content')
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade  in active">
            <div class="row">
                @foreach($commerces as $commerce)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                @if($commerce->logo)
                                    <figure class="effect-ming"><img
                                                src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                                class="img-responsive" alt="{{ $commerce->name }}">
                                    </figure>
                                @else
                                    <figure class="effect-ming"><img src="{{ asset('images/nodisp.png') }}"
                                                                     alt="{{ $commerce->name }}">
                                    </figure>
                                @endif
                            </div>
                            <div class="popular-listing-detail">
                                <h3>
                                    <a href="{{url('catalogo', $commerce->slug)}}">{{ ucfirst(str_limit($commerce->name,15)) }}</a>
                                </h3>
                                @if($commerce->address)
                                    <p>{{ str_limit($commerce->address, 20) }}</p>
                                @else
                                    <p>Local sin dirección</p>
                                @endif
                                <div class="rateing-starts">
                                                <span class="rateing-star-img"
                                                      style="width:{{($commerce->votes_positive * 100)/ ($commerce->votes_positive + $commerce->votes_negative)}}%;"></span>
                                </div>
                                <h6>{{$commerce->votes_positive + $commerce->votes_negative}} Votos</h6>
                            </div>
                            @if(!empty($commerce->region->name))
                                <div class="popular-listing-add"><span><i class="fa fa-map-marker"
                                                                          aria-hidden="true"></i> {{ $commerce->region->name }} - {{ $commerce->province->name< }}</span>
                                </div>
                            @else
                                <div class="popular-listing-add"><span><i class="fa fa-map-marker"
                                                                          aria-hidden="true"></i> Sin localidad</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bs-example" data-example-id="disabled-active-pagination">
        <nav aria-label="...">
            <ul class="pagination">
                {!! $commerces->render() !!}
            </ul>
        </nav>
    </div>
    <div id="call-to-action2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 call-to-action-text">
                    <p>Haces comida <b>celíaca</b>, registrate totalmente gratis y llegá a muchas más personas celiacas en todo el país.</p>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12 call-to-action-bttn">
                    @if(Auth::check())
                        <a href="{{ url('cliente-perfil') }}">Perfil</a>
                    @else
                        <a href="{{ url('login') }}">Registrate</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection