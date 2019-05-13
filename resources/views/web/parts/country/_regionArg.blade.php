<div class="col-md-3">
    <div class="restaurent-rightside-sections">
        <div class="restaurent-rs-column">
            <div class="restaurent-food-rbar">
                <h5>Provincias<i class="fa fa-map-marker" aria-hidden="true"></i></h5>
            </div>
            <div class="food-rbar-caption">
                <ul>
                    @foreach($provinces as $province)
                        <li><a href="{{ url('argentina', $province->slug) }}"><span>{{ $province->name }}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="food-public-adds">
        <div class="right-bar">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- provincesCeliacos -->
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

    </div>
</div>