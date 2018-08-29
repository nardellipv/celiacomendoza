<div class="widget widget-recent-products">
    <div class="widget-title">
        <h5>Últimos Productos</h5>
    </div>
    <div class="widget-content">
        @foreach($lastProducts as $lastProduct)
            <div class="product">
                <img src="{{ $lastProduct->photo }}" alt="product" width="20%"/>
                <div class="product-desc">
                    <div class="product-title">
                        <a href="{{ url('producto', array($commerce->id, $lastProduct->id)) }}">{{ $lastProduct->name }}</a>
                    </div>
                    <div class="product-meta">
                        <span class="color-theme">${{ $lastProduct->price }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>