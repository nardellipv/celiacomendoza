@if(count($products) > 0)
    <div class="details-heading heading">
        <h2 class="p_b20">Nuestros <span>Productos</span></h2>
        <div class="main">
            <ul id="og-grid" class="og-grid">
                @foreach($products as $product)
                    <li>
                        <a href="#">
                        <img src="{{ asset('images/thumbnail/products/'.($product->photo)) }}"
                             alt="{{ $product->name }}"/>
                        <h4 style="background-color: #0000007a;margin-left: -10px;">{{ $product->name }} - $ {{ $product->price }}</h4>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif