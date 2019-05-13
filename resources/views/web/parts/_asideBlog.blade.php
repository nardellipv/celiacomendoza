<div class="opening-side-columns">
    <div class="food-side-title">
        <h6>Últimas Entradas</h6>
    </div>
    @foreach($lastPosts as $lastPost)
        <div class="food-related-posts">
            <figure>
                <img src="{{ asset('images/blog/thumbnail/' .$lastPost->photo) }}" alt="{{ $lastPost->title }}">
            </figure>
            <div class="food-ralated-cap">
                <a href="{{ url('blog', $lastPost->slug) }}">{{ str_limit($lastPost->title,20) }}</a>
                <p>{!! str_limit($lastPost->body, 70) !!}</p>
            </div>
        </div>
    @endforeach
</div>

<div class="food-categories-lists">
    <div class="food-side-title">
        <h6>También podes visitar a:</h6>
    </div>
    <div class="food-twis-columns">
        <div class="coupons-sec">
            <div class="recent-coupons-cols">
                <figure>
                    <img src="{{ asset('images/thumbnail/logo/'.($randomCommerce->logo)) }}"
                         alt="{{ $randomCommerce->name }}">
                </figure>
                <div class="rescents-coupons-cap">
                    <div class="rateing-starts">
                                                <span class="rateing-star-img"
                                                      style="width:{{($randomCommerce->votes_positive * 100)/ ($randomCommerce->votes_positive + $randomCommerce->votes_negative)}}%;"></span>
                    </div>
                    <a href="{{url('catalogo', $randomCommerce->slug)}}"><span>{{ ucfirst(str_limit($randomCommerce->name,20)) }}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="food-categories-lists">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- regionsCeliacos -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7543412924958320"
         data-ad-slot="4444645960"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>