@extends('layouts.main')

@section('title', 'Ubicación ' . $province->name)
@section('meta-description', '🚗 Locales sin gluten en ' . $province->name . ' entra e informate sobre los comercios que se encuentra en tu zona')

@section('content')
    <div class="content">
        <section class="food-grid-view">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="filters-topbar-style">
                            <div class="pull-left">
                                <p>{{ $countCommerce }} Comercios encontrados en {{ $province->name }}</p>
                            </div>
                            @if(!Request::is('argentina/busqueda/*'))
                                <div class="list-dropdown-menu">
                                    <p>Localidad</p>
                                    {!! Form::open(['method' => 'POST','route' => ['listSearchProvince', $province->slug],'style'=>'find-search-engine']) !!}
                                    {{ csrf_field() }}
                                    <div class="dropdown">
                                        <select name="region">
                                            @foreach($regions as $region)
                                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                    {!! Form::Close() !!}
                                </div>
                            @endif
                        </div>
                        <div class="tab-content main-food-restaurent-sections">
                            <div class="tab-pane fade in active" id="listbar">
                                @foreach($commerces as $commerce)
                                    <div class="food-restaurent-cols only-hover">
                                        @if($commerce->logo)
                                            <figure>
                                                <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                                     alt="{{ $commerce->name }}">
                                            </figure>
                                        @else
                                            <figure>
                                                <img src="{{ asset('images/nodisp.png') }}" alt="{{ $commerce->name }}">
                                            </figure>
                                        @endif
                                        <div class="food-caption-static">
                                            <h4>{{ ucfirst($commerce->name) }}</h4>
                                            {{--<span>Feature</span>--}}
                                            <small>{{ $commerce->region->name }}
                                                - {{ $commerce->province->name }}</small>
                                            <h6 class="text text-center"><i class="fa fa-thumbs-o-up"
                                                                            style="color:green"></i> {{ $commerce->votes_positive }}
                                                &nbsp;&nbsp;&nbsp;<i class="fa fa-thumbs-o-down"
                                                                     style="color:red"></i> {{ $commerce->votes_negative }}
                                            </h6>
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
                    @include('web.parts.country._regionArg')
                </div>
            </div>
        </section>
    </div>
@endsection