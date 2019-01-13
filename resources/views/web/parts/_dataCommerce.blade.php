<div class="row">
    <div class="col-md-12">
        @include('web.parts.alerts.successVote')
        <div class="details-heading heading">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4"><h3 style="color: #1fb7a6">{{ $commerce->name }}</h3></div>
                            <div class="col-sm-offset-2 col-sm-2" style="font-size: 1.1em;">
                                <i class="fa fa-thumbs-o-up" style="color:green"></i> {{ $commerce->votes_positive }}
                                <i class="fa fa-thumbs-o-down" style="color:red"></i> {{ $commerce->votes_negative }}
                                <i class="fa fa-question-circle-o red-tooltip" data-toggle="tooltip"
                                   title="Votos de la comunidad" style="font-size: 1.3em;color: black;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="details-heading-address">
                        @if($commerce->address)
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección - {{ $commerce->address }}
                            </p>
                        @endif
                        <br>
                        @if($commerce->address)
                            <p><i class="fa fa-map-o" aria-hidden="true"></i>Localidad - {{ $commerce->region->name }}
                            </p>
                        @else
                            <p><i class="fa fa-map-o" aria-hidden="true"></i>Localidad - Sin Localidad</p>
                        @endif
                        <ul>
                            @if($commerce->phone)
                                <li><i class="fa fa-phone" aria-hidden="true"></i> {{ $commerce->phone }}</li>
                            @endif
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> {{ $commerce->user->email }}</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> {{ $commerce->user->name }}</li>
                        </ul>
                        <br><br>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3"><p>¿Comó te fue con <b>{{ $commerce->name }}</b>?</p></div>
                                <div class="col-sm-1"><a href="{{ route('positive', $commerce->slug) }}"><i
                                                class="fa fa-thumbs-o-up fa-2x"></i></a></div>
                                <div class="text-left"><a href="{{ route('negative', $commerce->slug) }}"><i
                                                class="fa fa-thumbs-o-down fa-2x"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @if($commerce->logo)
                        <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                             alt="{{ $commerce->name }}">
                    @else
                        <img src="{{ asset('images/nodisp.png') }}" alt="{{ $commerce->name }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>