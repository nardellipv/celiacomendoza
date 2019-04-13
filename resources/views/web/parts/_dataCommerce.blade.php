@extends('layouts.main')

@section('title',' ⚠ ' . $commerce->name . ' local para celiacos')
@section('meta-description','💪 Local de comida sin TACC '.$commerce->name .' ubicado en '.$commerce->region->name .' ingresa y conoce más sobre este local')

<style type="text/css">
    .g-recaptcha {
        transform: scale(0.73);
        -webkit-transform: scale(0.73);
        transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
    }
</style>

@section('content')
    <div class="content">
        <section class="restaurent-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @include('web.parts.alerts.successVote')
                        @include('web.parts.alerts.error')
                        <div class="dorchester-grill-section">
                            <div class="col-md-6">
                                <div class="views-locate text-center">
                                    <h2>{{ $commerce->name }}</h2>
                                </div>
                                @if($commerce->logo)
                                    <figure>
                                        <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                             alt="{{ $commerce->name }}">
                                    </figure>
                                @else
                                    <figure>
                                        <img src="{{ asset('images/nodisp.png') }}"
                                             alt="{{ $commerce->name }}">
                                    </figure>
                                @endif
                                <div class="views-locate">
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
                                    <span><i class="fa icon-location-pointer"></i></span>
                                    <p>{{ $commerce->address }} {{ $commerce->region->name }}
                                        , {{ $commerce->province->name }}</p>
                                    <span><i class="fa fa-phone"></i></span>
                                    <p>{{ $commerce->phone }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <iframe
                                        width="100%"
                                        height="300px"
                                        frameborder="0" style="border:0"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALYXInVytihQDVFo-eCCB1h3iq59whY0g&q={{ $commerce->address .','. $commerce->location . $commerce->province->name}}"
                                        allowfullscreen>
                                </iframe>
                                <br><br><br>
                                <div><p>¿Comó te fue con <b>{{ $commerce->name }}</b>?</p></div>
                                <ul class="rateing-showside">
                                    <li><a href="{{ route('positive', $commerce->slug) }}" rel="nofollow"><i
                                                    class="fa fa-thumbs-o-up fa-2x"></i></a> Muy Bien
                                    </li>
                                    <li><a href="{{ route('negative', $commerce->slug) }}" rel="nofollow"><i
                                                    class="fa fa-thumbs-o-down fa-2x"></i></a> No lo recomiendo
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detail-infomamtion-blog">
                            <div class="food-restrurent-blog-title">
                                <h3>Sobre Nosotros</h3>
                                @if($commerce->about)
                                    <p>{{ $commerce->about }}</p>
                                @else
                                    <p>Local sin descripción</p>
                                @endif
                            </div>
                        </div>
                        @if(count($products) > 0)
                            <div class="velue-accordien-tab">
                                <div class="food-restrurent-blog-title">
                                    <h3>Nuestros productos</h3>
                                    <p>Listado de productos realizados por {{ $commerce->name }} </p>
                                </div>
                                <div class="restrurent-menu-service">
                                    <div class="accordien-title accordien-title-card ">
                                        <h5>Productos</h5>
                                    </div>
                                    <!--Food accordien col-->
                                    <div class="accordien-content-menu">
                                        @foreach($products as $product)
                                            <div class="col-md-6 text-center">
                                                <figure>
                                                    <img src="{{ asset('images/thumbnail/products/'.($product->photo)) }}"
                                                         alt="">
                                                </figure>
                                                <br>
                                                <div class="content-radius-caption text-center">
                                                    <h5>{{ $product->name }}<span><b> ${{ $product->price }}</b></span>
                                                    </h5>
                                                    <h6>{{ $product->category->name }}</h6>
                                                    <br>
                                                    <p>{{ str_limit($product->description,200) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="infom-service-restrurent">
                            <div class="food-restrurent-blog-title">
                                <h3>Caracteristicas</h3>
                                <p>Algunas de las caracteristicas de este local.</p>
                            </div>
                            <ul class="restrurant-service-onair">
                                @if(count($characteristicCommerces) > 0)
                                    @foreach($characteristicCommerces as $characteristicCommerce)
                                        <li>
                                            <img src="{{ asset($characteristicCommerce->characteristic->photo) }}"
                                                 style="width: auto;"> {{ $characteristicCommerce->characteristic->name }}
                                        </li>
                                    @endforeach
                                @else
                                    <p>Este local no agregó ninguna caracteristica.</p>
                                @endif
                            </ul>
                        </div>

                        <div class="infom-service-restrurent">
                            <div class="food-restrurent-blog-title">
                                <h3>Medios de pago</h3>
                                <p>Medios de pagos aceptados por el local.</p>
                            </div>
                            <ul class="restrurant-service-onair">
                                @if(count($commercePayment) > 0)
                                    @foreach($commercePayment as $payment)
                                        <li>
                                            <img src="{{ asset($payment->payment->photo) }}" style="width: auto;">
                                        </li>
                                    @endforeach
                                @else
                                    <p>Este local no agregó ningún medio de pago.</p>
                                @endif
                            </ul>
                        </div>
                        <div class="velue-accordien-tab">
                            <div class="food-restrurent-blog-title">
                                <h3>Redes sociales de {{ $commerce->name }}</h3>
                                <p>Redes sociales del local.</p>
                            </div>
                            <div class="restrurent-menu-service">
                                <div class="accordien-title accordien-title-card">
                                    <h5>Facebook</h5>
                                </div>
                                <div class="accordien-content-menu">
                                    <div class="fb-page" data-href="https://www.facebook.com/{{ $commerce->facebook }}/"
                                         data-tabs="timeline" data-width="1500" data-small-header="false"
                                         data-adapt-container-width="false" data-hide-cover="false"
                                         data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/{{ $commerce->facebook }}/"
                                                    class="fb-xfbml-parse-ignore"><a
                                                    href="https://www.facebook.com/{{ $commerce->facebook }}/">{{ $commerce->name }}</a>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="restaurent-food-titles">
                            <h2>Otros negocios para celíacos</h2>
                            <span class="title-style"></span>
                            <p>Consulta otros negocios relacionados.</p>
                        </div>
                        <div class="row">
                            @foreach($relateds as $related)
                                <div class="col-md-4 col-sm-6 col-sm-12">
                                    <div class="restrurent-grid-columns only-hover">
                                        @if($related->logo)
                                            <a href="{{url('catalogo', $related->slug)}}">
                                                <figure>
                                                    <img src="{{ asset('images/thumbnail/logo/'.($related->logo)) }}"
                                                         class="img-responsive"
                                                         alt="{{ $related->name }}">
                                                </figure>
                                            </a>
                                        @else
                                            <a href="{{url('catalogo', $related->slug)}}">
                                                <figure>
                                                    <img src="{{ asset('images/nodisp.png') }}"
                                                         alt="{{ $related->name }}">
                                                </figure>
                                            </a>
                                        @endif
                                        <div class="caption-food-blog">
                                            <div class="rateing-starts">
                                                <span class="rateing-star-img" style="width:80%;"></span>
                                            </div>
                                            <br>
                                            <h5>{{ str_limit($related->name,50) }}</h5>
                                            @if($related->address)
                                                <p>{{ $related->address }} {{ $related->region->name }}
                                                    , {{ $related->province->name }}</p>
                                            @else
                                                <p>{{ $related->region->name }}
                                                    , {{ $related->province->name }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="food-right-sidebar">
                            <div class="food-title-rightside">
                                <h6>Contacto Rápido<i class="icon-send-message"></i></h6>
                            </div>
                            {!! Form::open(['method' => 'POST','route' => ['mailcustomers', $commerce->id]]) !!}
                            {{ csrf_field() }}
                            <input type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}"
                                   name="name" required>
                            <input type="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}"
                                   name="email" required>
                            <textarea class="form-control" name="messageCustomer" placeholder="Mensaje"
                                      required>{{ old('messageCustomer') }}</textarea>
                            {!! Recaptcha::render() !!}
                            <div class="food-m-button">
                                <button>Enviar</button>
                            </div>
                            {!! Form::Close() !!}
                        </div>
                    </div>
                    @include('web.parts.country._regionArg')
                </div>
            </div>
        </section>
    </div>
@endsection