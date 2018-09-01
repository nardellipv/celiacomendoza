<section id="locales" class="team team-1 pb-lg">
    <div class="container">
        <div class="row heading-1 mb-60 clearfix">
            <div class="col-xs-12 col-xs-offset-1  col-sm-12  col-md-3 col-md-offset-1">
                <div class="heading mb-0">
                    <p>Asociados</p>
                    <h2>Listado de tiendas</h2>
                </div>
            </div>
            <div class="col-xs-12  col-sm-12  col-md-6">
                {{--texto al costado del titulo--}}
            </div>
        </div>

        <div class="row">
            @foreach($commerces as $commerce)
                <div class="col-xs-12 col-sm-6 col-md-3 member">
                    <div class="member-img">
                        <img src="{{asset($commerce->logo)}}" alt="member"/>
                        <div class="member-bg"></div>
                        <div class="member-hover">
                            <h5>{{ $commerce->name }}</h5>
                            <h6>{{ $commerce->address }}</h6>
                            <h6>{{ $commerce->phone }}</h6>
                            <div class="member-social">
                                @if($commerce->facebook)
                                    <a href="http://www.facebook.com/{{ $commerce->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if($commerce->twitter)
                                        <a href="https://twitter.com/{{ $commerce->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                @endif
                                <a href="{{url('catalogo', $commerce->id)}}"><i class="fa fa-arrow-right" style="color: black"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>