<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <div class="category-list ">
                @include('web.parts.alerts.error')
                    <!--/.tab-box-->
                    <div class="listing-filter">
                        <div class="pull-left col-xs-6">
                            <div class="breadcrumb-list">
                                <span>Listado de productos</span>
                            </div>
                        </div>
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>
                    <!--/.listing-filter-->

                    <div class="tab-content">
                        <div class="tab-pane  active " id="alladslist">
                            <div class="adds-wrapper row no-margin">
                                @foreach($listProducts as $listProduct)
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-md-2 no-padding photobox">
                                                <div class="add-image">
                                                    <img class="thumbnail no-margin" src="{{ $listProduct->photo }}"
                                                         alt="img">
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-7 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title">
                                                        {{ $listProduct->name }}
                                                    </h5>
                                                </div>
                                                <div class="card-event-info">
                                                    <p class="event-time"><i
                                                                class="fa icon-restaurant"></i> {{ $commerce->name }}
                                                    </p>
                                                    <p class="event-location"><i class="fa icon-location"></i>
                                                        <a class="location"
                                                           href="">{{ $commerce->address }} {{ $commerce->number }} </a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">
                                                <h2 class="item-price"> $ {{ $listProduct->price }} </h2>
                                                <p>Cantidad: <strong>{{ $listProduct->quantity }}</strong></p>
                                                <a href="{{ url('borrar', array($listProduct->commerce_id, $listProduct->id)) }}"
                                                   class="btn btn-danger  btn-sm make-favorite">
                                                    <i class="fa fa-trash"></i>
                                                    <span>Eliminar</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="tab-box save-search-bar text-right"
                         style="padding:  20px; background-color:  yellowgreen;">
                        <div class="row">
                            <div class="col-sm-10">
                                Cantidad Productos:
                            </div>
                            <div class="col-sm-2">
                                <h2 class="item-price"> {{ $sumQuantity }} </h2>
                            </div>
                            <div class="col-sm-10">
                                total:
                            </div>
                            <div class="col-sm-2">
                                <h2 class="item-price"> $ {{ $sumTotal }} </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-box save-search-bar text-center">
                    <a class="btn btn-secondary" href="{{ url('/') }}#locales">Continuar Comprando</a>
                </div>
            </div>

            <div class="pagination-bar text-center">
                <nav aria-label="Page navigation " class="d-inline-b">
                    {{--pagination--}}
                </nav>
            </div>
            <div class="post-promo text-center offset-1">
                <h2> Al comprar </h2>
                <h5>Al confirmar esta compra usted deberá buscarla y abonarla en el local
                    comercial. Para mayor información por favor
                    comuniquese con el local de la compra.</h5>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12  col-sm-12">
                            {!! Form::open(['method' => 'POST','url' => ['checkout']]) !!}
                            {{ csrf_field() }}
                            @if($cartCount > 0)
                                @foreach($listProducts as $key=>$listProduct)
                                    {{--nombre de comercios--}}
                                    <input type="text" name="nameCommerce[{{$key}}]"
                                           value="{{ $listProduct->commerce->name }}" id="name" readonly required
                                           hidden/>
                                    {{--email de comercios--}}
                                    <input type="text" name="mailCommerce[{{$key}}]"
                                           value="{{ $listProduct->commerce->user->email }}" id="name" readonly
                                           required
                                           hidden/>
                                    {{--tel de comercios--}}
                                    <input type="text" name="phoneCommerce[{{$key}}]"
                                           value="{{ $listProduct->commerce->phone }}" id="name" readonly required
                                           hidden/>
                                    {{--direccion de comercios--}}
                                    <input type="text" name="addressCommerce[{{$key}}]"
                                           value="{{ $listProduct->commerce->address }}" id="name" readonly required
                                           hidden/>
                                    {{--listado de los productos--}}
                                    <input type="text" name="products[]"
                                           value="{{ $listProduct->name }}" id="name" readonly required hidden/>
                                    {{--imagenes de los productos--}}
                                    <input type="text" name="productsPhoto[]"
                                           value="{{ $listProduct->photo }}" id="name" readonly required hidden/>
                                    {{--precio productos--}}
                                    <input type="text" name="productsPrice[]"
                                           value="{{ $listProduct->price }}" id="name" readonly required hidden/>
                                    {{--precio total--}}
                                    <input type="text" name="total"
                                           value="{{ $sumTotal }}" id="name" readonly required hidden/>
                                @endforeach
                                {{--num invoice--}}
                                <input type="text" name="numInvoice"
                                       value="{{ $listProduct->num_invoice }}" id="name" readonly required hidden/>
                            @endif

                            <fieldset>
                            <div class="col-sm-6 offset-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Nombre" value="{{ old('name') }}" required/>
                                </div>
                            </div>
                            <div class="col-sm-6 offset-3 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" id="lastname"
                                           placeholder="Apellido" value="{{ old('lastname') }}" required/>
                                </div>
                            </div>
                            <div class="col-sm-6 offset-3 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           placeholder="Teléfono" value="{{ old('phone') }}" required/>
                                </div>
                            </div>
                            <div class="col-sm-6 offset-3 ">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email"
                                           placeholder="Email" required/>
                                </div>
                            </div>
                            <div class="col-md-8 offset-2">
                                        <textarea class="form-control" name="contact-message" id="message"
                                                  rows="3"
                                                  placeholder="Si desea envie un mensaje al comercio">{{ old('contact-message') }}</textarea>
                            </div>
                            <div class="col-md-8 offset-2">
                                @if($cartCount > 0)
                                    <button type="submit" id="submit-message" class="btn btn-primary btn-block">
                                        Procesar Compra
                                    </button>
                                @else
                                    <button type="submit" id="submit-message" class="btn btn-primary btn-block"
                                            disabled>
                                        Procesar Compra
                                    </button>
                                @endif
                            </div>

                            {!! Form::Close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

