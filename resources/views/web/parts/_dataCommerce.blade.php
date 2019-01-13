<div class="row">
    <div class="col-md-12">
        @include('web.parts.alerts.successVote')
        <div class="details-heading heading">
            <div class="row">
                <div class="col-md-8">
                    <h2>{{ $commerce->name }}</h2>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"><i class="fa fa-thumbs-o-up" style="color:green"></i> {{ $commerce->votes_positive }}</div>
                            <div class="text-left"><i class="fa fa-thumbs-o-down" style="color:red"></i> {{ $commerce->votes_negative }}</div>
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
                                <div class="col-sm-1"><a href="{{ route('positive', $commerce->slug) }}"><i class="fa fa-thumbs-o-up fa-2x"></i></a></div>
                                <div class="text-left"><a href="{{ route('negative', $commerce->slug) }}"><i class="fa fa-thumbs-o-down fa-2x"></i></a></div>
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