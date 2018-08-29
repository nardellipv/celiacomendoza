<section id="shop" class="shop shop-3 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-3 sidebar-full">
                @include('web.parts._shopCategories')
                @include('web.parts._shopLastItems')
            </div>
            <div class="col-xs-12  col-sm-12  col-md-9">
                <div class="row">
                    <div class="col-xs-6  col-sm-6  col-md-6 product-options">
                        <div class="product-num pull-left pull-none-xs">
                            <h2><a href="{{ url('listado', $commerce->id) }}"><i
                                            class="fa fa-arrow-circle-left fa-lg"></i></a>
                                Total: <span class="color-theme">{{ $countProducts }}</span> productos
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-xs-12 col-sm-6 col-md-4 product">
                            <div class="product-img">
                                <img src="{{ $product->photo }}" alt="Product"/>
                                <div class="product-price">
                                    <span>$</span><span class="symbole">{{ $product->price }}</span>
                                </div>
                                <div class="product-hover">
                                    <div class="product-action">
                                        <a class="btn btn-primary" href="#">Agregar</a>
                                        <a class="btn btn-secondary" href="{{ url('producto', array($commerce->id, $product->id)) }}">Detalle</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-bio">
                                <div class="prodcut-cat">
                                    <a href="#">{{ $product->category->name }}</a>
                                </div>
                                <div class="prodcut-title">
                                    <h3><a href="#">{{ substr($product->name,0,15) }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-xs-12  col-sm-12  col-md-12 clearfix">
                        {{ $products->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>