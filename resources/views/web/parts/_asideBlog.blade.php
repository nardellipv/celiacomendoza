<aside>
    <div class="inner-box">
        <!--/.categories-list-->
        <div class="categories-list  list-filter">
            <h5 class="list-title uppercase"><strong><a href="#"> Últimas Entradas</a></strong></h5>


            <div class="blog-popular-content">
                @foreach($lastPosts as $lastPost)
                    <div class="item-list">


                        <div class="col-sm-4 col-xs-4 no-padding photobox">
                            <div class="add-image"><a href="{{ url('blog', $lastPost->slug) }}">
                                    <img class="no-margin" src="{{ asset('images/blog/thumbnail/' .$lastPost->photo) }}" alt="img"></a>
                            </div>
                        </div>
                        <!--/.photobox-->
                        <div class="col-sm-8 col-xs-8 add-desc-box">
                            <div class="ads-details">
                                <h5 class="add-title"><a href="{{ url('blog', $lastPost->slug) }}">{{ $lastPost->title }}</a></h5>
                                <span class="info-row">  <span class="date"><i
                                                class=" icon-clock"> </i> {{ Date::parse($lastPost->created_at)->format('d/m/Y H:m') }}  </span> </span>
                            </div>
                        </div>
                        <!--/.add-desc-box-->


                    </div>
                @endforeach

            </div>

            <div class="categories-list  list-filter">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- IndexUP -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-7543412924958320"
                     data-ad-slot="3230632682"
                     data-ad-format="link"
                     data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

            </div>

            <div style="clear:both"></div>

        </div>

    </div>
</aside>