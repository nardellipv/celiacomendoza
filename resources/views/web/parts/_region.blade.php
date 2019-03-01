<div class="right-bar">
    <h4>Filtar por <span>Regiones</span></h4>
    <ul class="right-bar-listing">
        @foreach($regions as $region)
            <li><a href="{{ url('region', $region->slug) }}" title="{{ $region->name }}"><i class="fa fa-map-marker"
                                                                                            aria-hidden="true"></i> {{ $region->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
<div class="right-bar">
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
    <br>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- regionsCuadrado -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:250px;height:250px"
         data-ad-client="ca-pub-7543412924958320"
         data-ad-slot="6437321540"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
