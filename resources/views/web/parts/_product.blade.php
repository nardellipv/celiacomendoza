<section id="product" class="shop product shop-product bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-3 sidebar-full">
                @include('web.parts._shopCategories')
                @include('web.parts._shopLastItems')
            </div>
            <div class="col-xs-12  col-sm-12  col-md-9">
                {{--                <!-- Alert Message -->
                                <div class="alerts">
                                    <div class="alert-icon">
                                        <i class="fa fa-check-circle"></i>
                                    </div>
                                    <div class="alert-content">
                                        <h4>Item Was Successfully Added To Your Cart.</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                                    </div>
                                </div>
                                <!-- .aret end -->--}}

                <div class="product-img mb-15-sm">
                    <img src="{{ $product->photo }}" alt="product image">
                </div>
                <div class="product-title">
                    <h3 style="text-align:  center;">{{ $product->name }}</h3>
                </div>
                <div class="product-price-total" style="text-align:  center;>
                    <span class="symbole">$</span><span> {{ $product->price }}</span>
                </div>
                {{--<div class="product-desc">--}}
                {{--<p>{{ $product->description }}</p>--}}
                {{--</div>--}}
                <div class="product-action clearfix" style="padding: 19px 0px 40px 50px;">
                    <div class="product-quantity pull-left pull-none-xs">
                        <span class="qua">Cantidad:</span>
                        <span><input type="text" name="quantity" id="pro-qunt" required></span>
                    </div>
                    <div class="text-right text-center">
                        <a class="btn btn-primary" href="#">Agregar al Carrito</a>
                    </div>
                </div>

                <div class="product-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#description" aria-controls="description"
                                                                  role="tab" data-toggle="tab">description</a></li>
                        <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
                        </li>
                    </ul>

                    <hr>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="description">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div role="tabpanel" class="tab-pane reviews" id="reviews">
                            <ul class="product-review list-unstyled">
                                <li class="review-comment">
                                    <h6>Mostafa Amin</h6>
                                    <p class="review-date">22/02/2016</p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-comment">
                                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus
                                            suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque.
                                            Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl,
                                            ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae
                                            pede, id odio.</p>
                                    </div>
                                </li><!-- .review-comment end -->

                                <li class="review-comment">
                                    <h6>Mohamed Habaza</h6>
                                    <p class="review-date">21/02/2016</p>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-comment">
                                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus
                                            suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque.
                                            Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl,
                                            ultrices ridiculus in magna purus consequuntur, ipsum donec orci ad vitae
                                            pede, id odio.</p>
                                    </div>
                                </li><!-- .review-comment end -->
                            </ul>
                            <div class="form-review">
                                <form>
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"/>
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"/>
                                    <select class="form-control">
                                        <option selected value="Default">Your Rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <textarea class="form-control" id="review" rows="3" placeholder="Review"></textarea>
                                    <button type="submit" class="btn btn-primary btn-block">Post Your review</button>
                                </form>
                            </div>
                        </div>
                        <!-- #reviews end -->
                    </div>
                    <!-- #tab-content end -->
                </div><!-- .product-tabs end -->


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
                                            <a class="btn btn-secondary" href="{{ url('producto', array($commerce->id, $relationItem->id)) }}">Detalle</a>
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
            </div>
        </div>
    </div>
</section>