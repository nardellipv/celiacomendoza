<section id="highlight" class="shop shop-1 bg-gray">
    <div class="container">
        <div class="row heading-1 mb-60 clearfix">
            <div class="col-xs-12 col-xs-offset-1  col-sm-12  col-md-3 col-md-offset-1">
                <div class="heading mb-0">
                    <p>Productos</p>
                    <h2>Destacados</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($highlights as $highlight)
                <div class="col-xs-12 col-sm-6 col-md-3 product">
                    <div class="product-img">
                        <img src="{{ $highlight->photo }}" alt="Product"/>
                        <div class="product-price" style="background-color: #00000099;">
                            <span>$</span><span class="symbole">{{ $highlight->price }}</span>
                        </div>
                    </div>
                    <div class="product-bio">
                        <div class="prodcut-cat">
                            <p>{{ $highlight->category->name }}</p>
                        </div>
                        <div class="prodcut-title">
                            <h3><a href="{{ url('producto', array($commerce->id, $highlight->id)) }}">{{ substr($highlight->name, 0, 20) }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>