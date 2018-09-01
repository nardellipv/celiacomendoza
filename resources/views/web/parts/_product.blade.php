<section id="product" class="shop product shop-product bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-3 sidebar-full">
                @include('web.parts._shopCategories')
                @include('web.parts._shopLastItems')
            </div>
            <div class="col-xs-12  col-sm-12  col-md-9">

                @include('web.parts.alerts.successProductAdd')

                <div class="product-img mb-15-sm">
                    <img src="{{ $product->photo }}" alt="product image">
                </div>
                <div class="product-title">
                    <h3 style="text-align:  center;">{{ $product->name }}</h3>
                </div>
                <div class="product-price-total" style="text-align:  center;">
                    @if(!$product->offer)
                        <span class="symbole">$</span><span> {{ $product->price }}</span>
                    @else
                        <span class="symbole">$</span><span> <strike>{{ $product->price }}</strike></span><br>
                        <span class="symbole">$</span><span> {{ $product->offer }}</span>
                    @endif
                </div>

                {!! Form::open(['method' => 'POST','url' => ['add', $product->id],'class'=>'domain_form']) !!}
                {{ csrf_field() }}
                <div class="product-action clearfix" style="padding: 19px 0px 40px 50px;">
                    <div class="product-quantity pull-left pull-none-xs">
                        <span class="qua">Cantidad:</span>
                        <span><input type="number" name="quantity" id="pro-qunt" placeholder="0" required></span>
                        <input type="text" name="product_id" value="{{ $product->id }}" id="pro-qunt" hidden readonly
                               required>
                    </div>
                    <div class="text-right text-center">
                        <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                    </div>
                </div>
                {!! Form::Close() !!}

                <div class="product-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description"
                                                                  role="tab" data-toggle="tab">description</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Comentarios</a>
                        </li>
                    </ul>

                    <hr>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div role="tabpanel" class="tab-pane reviews" id="reviews">
                            <div class="fb-comments"
                                 data-href="http://localhost/celiacomendoza/public/producto/{{ $commerce->id }}/{{ $product->id }}"
                                 data-numposts="5"></div>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="product-share">
                    <h5 class="share-title">Compartir el producto: </h5>
                    <a class="share-facebook" href="#" data-toggle="tooltip" data-placement="top"
                       title="Tooltip on top"><i class="fa fa-facebook"></i></a>
                    <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                    <a class="share-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </div>

                @if($relationItems == NULL)
                    <div class="product-related">
                        <div class="product-related-title">
                            <h5>Productos Relacionados:</h5>
                        </div>
                        <div class="row">
                            @foreach($relationItems as $relationItem)
                                <div class="col-xs-12 col-sm-6 col-md-4 product">
                                    <div class="product-img">
                                        <img src="{{$relationItem->photo}}" alt="Product"/>
                                        <div class="product-price">
                                            <span class="symbole">$</span><span>{{ $relationItem->price }}</span>
                                        </div>
                                        <div class="product-hover">
                                            <div class="product-action">
                                                <a class="btn btn-primary" href="#">Agregar</a>
                                                <a class="btn btn-secondary"
                                                   href="{{ url('producto', array($commerce->id, $relationItem->id)) }}">Detalle</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-bio">
                                        <div class="prodcut-title">
                                            <h3><a href="#">{{ substr($relationItem->name,0,15) }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>