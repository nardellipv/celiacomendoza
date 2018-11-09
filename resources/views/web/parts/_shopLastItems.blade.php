@foreach($lastProducts as $lastProduct)
    <div class="product">
        <img src="{{ asset('images/thumbnail/products/'.$lastProduct->photo) }}" alt="product" width="20%"/>
        <div class="product-desc">
            <div class="product-title">
                <a href="{{ url('producto', array($commerce->slug, $lastProduct->id)) }}">{{ str_limit($lastProduct->name,25) }}</a>
            </div>
            <div class="product-meta">
                @if(!$lastProduct->offer)
                    <span class="color-theme">${{ $lastProduct->price }}</span>
                @else
                    <span class="color-theme">$<strike>{{ $lastProduct->price }}</strike></span>
                    <span class="color-theme">${{ $lastProduct->offer }}</span>
                @endif
            </div>
        </div>
    </div>
    <br>
@endforeach