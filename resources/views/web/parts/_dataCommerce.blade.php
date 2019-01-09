<div class="row">
    <div class="col-md-12">
        <div class="details-heading heading">
            <div class="row">
                <div class="col-md-8">
                    <h2>{{ $commerce->name }}</h2>
                    <div class="details-heading-address">
                        @if($commerce->address)
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección - {{ $commerce->address }}
                            </p>
                        @endif
                        @if($commerce->address)
                            <p><i class="fa fa-map-o" aria-hidden="true"></i>Localidad - {{ $commerce->region->name }}
                            </p>
                        @else
                                <p><i class="fa fa-map-o" aria-hidden="true"></i>Localidad -  Sin Localidad</p>
                        @endif
                        <ul>
                            @if($commerce->phone)
                                <li><i class="fa fa-phone" aria-hidden="true"></i> {{ $commerce->phone }}</li>
                            @endif
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> {{ $commerce->user->email }}</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> {{ $commerce->user->name }}</li>
                        </ul>
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