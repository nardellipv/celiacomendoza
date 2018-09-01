<section id="shopcart" class="shop shop-cart bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr class="cart-product">
                            <th class="cart-product-item">Eliminar</th>
                            <th class="cart-product-item">Pruducto</th>
                            <th class="cart-product-quantity">Vendedor</th>
                            <th class="cart-product-quantity">Cantidad</th>
                            <th class="cart-product-total">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listProducts as $listProduct)
                            <tr class="cart-product">
                                <td width="4%">
                                    <a href="{{ url('borrar', array($listProduct->commerce_id, $listProduct->id)) }}"><i
                                                class="fa fa-times-circle fa-3x" style="color:red;"></i></a>
                                </td>
                                <td class="cart-product-item">
                                    <div class="cart-product-img">
                                        <img src="{{ $listProduct->photo }}" alt="product" style="width:  20%;"/>
                                    </div>
                                    <div class="cart-product-name">
                                        <h6>{{ $listProduct->name }}</h6>
                                    </div>
                                </td>
                                <td class="cart-product-quantity">{{ $listProduct->commerce->name }}</td>
                                <td class="cart-product-quantity">{{ $listProduct->quantity }}</td>
                                <td class="cart-product-total">$ {{ $listProduct->price }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td><h4>Total de la compra :</h4></td>
                            <td></td>
                            <td class="text text-center"><h4> {{ $sumQuantity }}</h4></td>
                            <td class="text text-center"><h4>$ {{ $sumTotal }}</h4></td>
                        </tr>
                        <td colspan="5">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                                    <a class="btn btn-secondary" href="{{ url('/') }}#locales">Continuar Comprando</a>
                                    <a class="btn btn-primary" data-scroll="scrollTo" href="#checkout">Continuar</a>
                                </div>
                            </div>
                        </td>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-xs-12  col-sm-12  col-md-12 mb-30-xs mb-30-sm">
                <div class="cart-shiping">
                    <h4>Nota:</h4>
                    <p style="font-size: 15px">Al confirmar esta compra usted deberá buscarla y abonarla en el local
                        comercial. Para mayor información por favor
                        comuniquese con el local de la compra.</p>
                </div>
            </div>

            <div id="checkout" class="col-xs-12  col-sm-12  col-md-12 mb-30-xs mb-30-sm">
                <div class="cart-total-amount">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12  col-sm-12  col-md-8 col-md-offset-2 widget-contact">
                                @include('web.parts.alerts.error')
                                {!! Form::open(['method' => 'POST','url' => ['checkout'],'style'=>'display:inline']) !!}
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

                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-30" name="name" id="name"
                                           placeholder="Nombre" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-30" name="lastname" id="lastname"
                                           placeholder="Apellido" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control mb-30" name="phone" id="phone"
                                           placeholder="Teléfono" required/>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control mb-30" name="email" id="email"
                                           placeholder="Email" required/>
                                </div>
                                <div class="col-md-12">
                                        <textarea class="form-control mb-30" name="contact-message" id="message"
                                                  rows="2"
                                                  placeholder="Si desea envie un mensaje al comercio"></textarea>
                                </div>
                                <div class="col-md-12">
                                    @if($cartCount > 0)
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-block">
                                            Procesar Compra
                                        </button>
                                    @else
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-block" disabled>
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
</section>