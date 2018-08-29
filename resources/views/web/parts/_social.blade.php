<section id="social" style="background-color: #f6f6f7;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if($commerce->facebook)
                    <div class="fb-page" data-href="https://www.facebook.com/{{ $commerce->facebook }}/"
                         data-tabs="timeline" data-width="500" data-small-header="false"
                         data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/todofraseslive/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/todofraseslive/">Todo Frases</a></blockquote>
                    </div>
                @else
                    <blockquote class="blockquote blockquote-3"><b>{{ $commerce->name }}</b> no posee facebook <i
                                class="fa fa-facebook fa-3x"></i></blockquote>
                @endif
            </div>
            <div class="col-md-6">
                @if($commerce->twitter)
                    <a class="twitter-timeline" data-width="100%" data-height="500"
                       href="https://twitter.com/{{ $commerce->twitter }}">Tweets by bocamendoza</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                @else
                    <blockquote class="blockquote blockquote-3"><b>{{ $commerce->name }}</b> no posee twitter <i
                                class="fa fa-twitter fa-3x"></i></blockquote>
                @endif
            </div>
        </div>
    </div>
</section>