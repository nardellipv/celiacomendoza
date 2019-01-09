<section id="latest-news">
    <div class="container">

        <div class="row">
            <div class="col-md-12 heading">
                <h2>ÚLTIMAS <span>NOTICIAS</span></h2>
            </div>
        </div>

        <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="latest-news-1">
                  <span class="latest-date">
                  {{ Date::parse($postLast->created_at)->format('j') }}<br>{{ Date::parse($postLast->created_at)->format('M') }}
              </span>
                    <img src="{{ asset('images/blog/'.$postLast->photo) }}" alt="{{ $postLast->photo }}"
                         data-holder-rendered="true" class="img-responsive">
                    <div class="latest-details">
                        <h3><a href="{{ url('blog', $postLast->slug) }}">{{ $postLast->title }}</a></h3>
                    </div>
                </div>
                <div class="call-to-action-btn">
                    <a href="{{ url('blog') }}">Lee más noticias</a>
                </div>
            </div>


            @foreach($posts as $post)
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="latest-news-2 clearfix">
                        <div class="latest-news-2-img">
                      <span class="latest-date">
                  {{ Date::parse($post->created_at)->format('j') }}<br>{{ Date::parse($post->created_at)->format('M') }}
              </span>
                            <img src="{{ asset('images/blog/'.$post->photo) }}" alt="{{ $post->photo }}">
                        </div>
                        <div class="latest-news-2-details">
                            <h3><a href="{{ url('blog', $post->slug) }}">{{ $post->title }}</a></h3>
                            <p>{!! str_limit($post->body, 150) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--ads--}}
    <div class="text-center">
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
</section>