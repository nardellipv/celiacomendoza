<div id="social" class="col-xl-12 content-box">
    <div class="row row-featured">
        <div style="clear: both"></div>
        <div class="tab-lite relative w100">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs " role="tablist">
                <li role="presentation" class="active nav-item"><a href="#tab1" aria-controls="tab1"
                                                                   role="tab" data-toggle="tab"
                                                                   class="nav-link"><i
                                class="icon-comment-1"></i> Comentarios</a>
                </li>
                <li role="presentation" class="nav-item"><a href="#tab2" aria-controls="tab2" role="tab"
                                                            data-toggle="tab" class="nav-link"><i
                                class="icon-comment"></i> Redes Sociales</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="tab1">
                    <div class="col-xl-12 offset-3">
                        <div class="row">
                            <div class="fb-comments"
                                 data-href="http://localhost/celiacomendoza/public/producto/{{ $commerce->id }}"
                                 data-numposts="5"></div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="tab2">
                    <div class="col-xl-12 tab-inner">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="fb-page" data-href="https://www.facebook.com/{{ $commerce->facebook }}/"
                                     data-tabs="timeline" data-width="500" data-small-header="false"
                                     data-adapt-container-width="false" data-hide-cover="false"
                                     data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/{{ $commerce->facebook }}/"
                                                class="fb-xfbml-parse-ignore"><a
                                                href="https://www.facebook.com/{{ $commerce->facebook }}/">{{ $commerce->name }}</a>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <a class="twitter-timeline" data-width="100%" data-height="500"
                                   href="https://twitter.com/{{ $commerce->twitter }}">Tweets
                                    by {{ $commerce->name }}</a>
                                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>