@extends('layouts.company')

@section('content')
    <h4>Locales en <b>{{ $region->name }}</b></h4>
    <br>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade  in active">
            <div class="row">
                @foreach($commerces as $commerce)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                @if($commerce->logo)
                                    <figure class="effect-ming"><img
                                                src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                                                class="img-responsive"
                                                alt="{{ $commerce->name }}">
                                        @else
                                            <figure class="effect-ming"><img src="{{ asset('images/nodisp.png') }}"
                                                                             alt="sin logo">
                                            </figure>
                                    </figure>
                                @endif
                            </div>
                            <div class="popular-listing-detail">
                                <h3><a href="{{url('catalogo', $commerce->slug)}}">{{ ucfirst(str_limit($commerce->name,15)) }}</a>
                                </h3>
                                @if($commerce->address)
                                    <p>{{ str_limit($commerce->address, 20) }}</p>
                                @else
                                    <p>Local sin dirección</p>
                                @endif
                                <p class="text text-center"><i class="fa fa-thumbs-o-up"
                                                               style="color:green"></i> {{ $commerce->votes_positive }}
                                    &nbsp;&nbsp;&nbsp;<i class="fa fa-thumbs-o-down"
                                                         style="color:red"></i> {{ $commerce->votes_negative }}</p>
                            </div>
                            @if(!empty($commerce->region->name))
                                <div class="popular-listing-add"><span><i class="fa fa-map-marker"
                                                                          aria-hidden="true"></i> {{ $commerce->region->name }}</span>
                                </div>
                            @else
                                <div class="popular-listing-add"><span><i class="fa fa-map-marker"
                                                                          aria-hidden="true"></i> Sin localidad</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bs-example" data-example-id="disabled-active-pagination">
        <nav aria-label="...">
            <ul class="pagination">
                {!! $commerces->render() !!}
            </ul>
        </nav>
    </div>
@endsection