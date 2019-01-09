<div class="right-bar bg_white">
    <h4>Últimas <span>Entradas</span></h4>

    @foreach($lastPosts as $lastPost)
        <div class="places-list">
            <h5><a href="{{ url('blog', $lastPost->slug) }}">{{ $lastPost->title }}</a></h5>
            <div class="media">
                <div class="media-left">
                    <a href="{{ url('blog', $lastPost->slug) }}">
                        <img class="media-object" src="{{ asset('images/blog/thumbnail/' .$lastPost->photo) }}"
                             alt="{{ $lastPost->title }}">
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="right-bar bg_white">
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