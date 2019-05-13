@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="restaurent-food-titles">
            <h2>¡Ahora en toda la Argentina!</h2>
            <span class="title-style"></span>
            <p>Creemos que podemos ayudar a muchos más celíacos a encontrar lugares y productos cerca de sus domicilios,
                por ese motivo decidimos que CeliacosMendoza amplíe sus horizontes y este en todo el país.</p>
            <p>Deseamos poder empezar a ayudar a todos los negocios y personas que elaboran productos si TACC como lo
                hemos venido haciendo hasta ahora.</p>
        </div>
        <div class="restaurent-services-infomation">
            <div class="row">
                <div class="col-md-9">
                    <div class="filters-topbar-style">
                        <div class="pull-left">
                            <p>Últimos negocios registrados.</p>
                        </div>
                    </div>
                    <div class="tab-content full-width">
                        <div class="tab-pane fade in active" id="listbar">
                            <div class="main-food-restaurent-sections" id="filterable-item-holder-1">
                                @foreach($commerces as $commerce)
                                    <div class="food-restaurent-cols only-hover filterable-item all 1 3">
                                        @if($commerce->logo)
                                            <figure>
                                                <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                                     class="img-responsive"
                                                     alt="{{ $commerce->name }}">
                                            </figure>
                                        @else
                                            <figure>
                                                <img src="{{ asset('images/nodisp.png') }}"
                                                     alt="{{ $commerce->name }}">
                                            </figure>
                                        @endif
                                        <div class="food-caption-static">
                                            <h4>{{ ucfirst($commerce->name) }}</h4>
                                            @if($commerce->created_at > Date::parse('-30 days')->format('Y-m-d H:m:s'))
                                                <span>Nuevo Negocio</span>
                                            @endif
                                            <small>{{ $commerce->region->name }}
                                                - {{ $commerce->province->name }}</small>
                                            @if($commerce->votes_positive)
                                                <div class="rateing-starts">
                                                <span class="rateing-star-img"
                                                      style="width:{{($commerce->votes_positive * 100)/ ($commerce->votes_positive + $commerce->votes_negative)}}%;"></span>
                                                </div>
                                            @else
                                                <div class="rateing-starts">
                                                <span class="rateing-star-img"
                                                      style="width:0%;"></span>
                                                </div>
                                            @endif
                                            <h6>{{$commerce->votes_positive + $commerce->votes_negative}} Votos</h6>
                                            @if($commerce->about)
                                                <p>{{ str_limit($commerce->about,200) }}</p>
                                            @else
                                                <p>El negocio <b>{{ $commerce->name }}</b> ubicado
                                                    en {{ $commerce->province->name }},
                                                    localidad {{ $commerce->region->name }} no posee ninguna
                                                    descripción.</p>
                                            @endif
                                            <a class="booknoew" href="{{url('catalogo', $commerce->slug)}}">Ir al
                                                negocio</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination-list">
                            {!! $commerces->render() !!}
                        </div>
                    </div>
                </div>
                @include('web.parts.country._regionArg')
            </div>
        </div>
    </div>
@endsection

@section('features')
    <section class="food-services">
        <div class="restaurent-service4 ">
            <div class="container">
                <div class="restaurent-food-titles">
                    <h2>Sobre Nosotros</h2>
                    <span class="title-style"></span>
                    <p>Queremos poder ofrecerle a personas celíacas una guía práctica y simple para poder comparar
                        precios y
                        productos, y buscar locales cercanos a sus domicilios, como también dar la posibilidad a los
                        distintos comercios y productores particulares de darse a conocer, llegar a mucha más gente y
                        dar
                        visibilidad a sus productos y comercios.</p>
                    <p>Si tiene un almacén del celíaco o vende comidas sin harinas, lo invitamos a que se registre en
                        nuestra web,
                        así podrá llegar a muchas más personas celiacas en Mendoza. Dentro de nuestra guía podrá
                        encontrar comidas para celíacos,
                        comidas sin harina, tortas para celíacos, etc.</p>
                    <p>Nuestra web es GRATIS y siempre lo va a ser, solo buscamos queremos facilitar solo un poco la
                        vida a la persona con
                        sintomas de celíaco.</p>
                </div>
                <ul class="row">
                    <li class="col-md-3 col-sm-6">
                        <span><i class="fa-2x icon-wallet-filled-money-tool"></i></span>
                        <h5>Totalmente Gratis</h5>
                    </li>
                    <li class="col-md-3 col-sm-6">
                        <span><i class="fa-2x icon-tool"></i></span>
                        <h5>Facilitar la comunicación</h5>
                    </li>
                    <li class="col-md-3 col-sm-6">
                        <span><i class="fa fa-building-o fa-2x"></i></span>
                        <h5>Locales para celíacos</h5>
                    </li>
                    <li class="col-md-3 col-sm-6">
                        <span class="starts"><i class="fa fa-map-marker fa-2x"></i></span>
                        <h5>Locales cerca de tu domicilio</h5>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection