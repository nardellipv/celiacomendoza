@extends('layouts.company')

@section('content')
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
                                                alt="{{ $commerce->name }}">
                                        @else
                                            <figure class="effect-ming"><img src="{{ asset('images/nodisp.png') }}"
                                                                             alt="sin logo">
                                            </figure>
                                @endif
                            </div>
                            <div class="popular-listing-detail">
                                <h3><a href="{{url('catalogo', $commerce->slug)}}">{{ $commerce->name }}</a></h3>
                                @if($commerce->address)
                                    <p>{{ str_limit($commerce->address, 20) }}</p>
                                @else
                                    <p>Local sin dirección</p>
                                @endif
                            </div>
                            <div class="popular-listing-add"><span><i class="fa fa-map-marker"
                                                                      aria-hidden="true"></i> {{ $commerce->region->name }}</span>

                            </div>
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