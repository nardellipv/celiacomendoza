@extends('layouts.company')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 page-content col-thin-right">
                <div class="inner inner-box ads-details-wrapper">
                    <h2> {{ $product->name }} </h2>
                    <div class="ads-image">
                        @if(!$product->offer)
                            <h1 class="pricetag"> $ {{ $product->price }}</h1>
                        @else
                            <h1 class="pricetag"> $ {{ $product->offer }}</h1>
                        @endif
                        {{--<img src="{{ asset('images/thumbnail/products/'.($product->photo)) }}">--}}
                        <img src="{{ asset('images/' . $product->commerce->name . '-' . $product->commerce->id . '/products/' . $product->photo) }}">
                    </div>
                    <!--ads-image-->

                    <div class="Ads-Details">
                        <h5 class="list-title"><strong>Detalles</strong></h5>

                        <div class="row">
                            <div class="ads-details-info col-md-8">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="col-md-4">
                                <aside class="panel panel-body panel-details">
                                    <ul>
                                        <li>
                                            @if(!$product->offer)
                                                <p class=" no-margin "><strong>Precio:</strong>$ {{ $product->price }}
                                                </p>
                                            @else
                                                <p class=" no-margin ">
                                                    <strong>Precio:</strong><strike>$ {{ $product->price }}</strike></p>
                                                <p class=" no-margin "><strong>Precio
                                                        Oferta:</strong>$ {{ $product->offer }}</p>
                                            @endif
                                        </li>
                                        <li>
                                            <p class="no-margin">
                                                <strong>Categoría:</strong> {{ $product->category->name }}</p>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--aside--}}
            <div class="col-md-3  page-sidebar-right">
                <aside>
                    <div class="card card-user-info sidebar-card">
                        <div class="block-cell user">

                            <div class="cell-media"><img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                                         alt="logo"></div>
                            <div class="cell-content">
                                <h5 class="title">Local</h5>
                                <span class="name">{{ $commerce->name }}</span>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="card-body text-left">
                                <div class="grid-col">
                                    <div class="col from">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Ubicación</span>
                                    </div>
                                    <div class="col to">
                                        <span>{{ $commerce->location }}</span>
                                    </div>
                                </div>

                                <div class="grid-col">
                                    <div class="col from">
                                        <i class="fas fa-user"></i>
                                        <span>Dirección</span>
                                    </div>
                                    <div class="col to">
                                        <span>{{ $commerce->address }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="ev-action">
                                {!! Form::open(['method' => 'POST','url' => ['add', $product->id],'class'=>'form-inline']) !!}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Cantidad:</label>
                                    <input type="number" class="form-control" placeholder="0" name="quantity"
                                           style="width: 60px; text-align: end; margin-left:  30px;">
                                </div>

                                <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">
                                    <i class="glyphicon glyphicon-shopping-cart"> </i>
                                    Agregar al carrito
                                </button>
                                {!! Form::Close() !!}
                            </div>

                        </div>
                    </div>

                    <div class="card sidebar-card">
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="{{ asset('webStyle/images/site/app.jpg') }}"
                                                                            alt="tv"></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            {{--aside--}}
        </div>
    </div>

    {{--productos relacionados--}}
    @if($relationItems == NULL)
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row row-featured" style="background-color: #e4ff005e;">
                        <div class="col-xl-12  box-title" style="background-color: yellow;">
                            <div class="inner"><h2><span>Productos </span> Relacionados </h2>
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

                            <div class="no-margin featured-list-slider ">
                                @foreach($relationItems as $relationItem)
                                    <div class="item"><a
                                                href="{{ url('producto', array($commerce->id, $relationItem->id)) }}">
                     <span class="item-carousel-thumb">
                    	<img class="img-responsive" src="{{ $relationItem->photo }}" alt="img">
                     </span>
                                            <span class="item-name"> {{ $relationItem->name }} </span>
                                            <span class="price">$ {{ $relationItem->price }}</span>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection