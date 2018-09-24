@extends('layouts.company')

@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-3 page-sidebar mobile-filter-sidebar sidebar-modern">
                @include('web.parts._regionAside')
            </div>
            <div class="col-md-9 page-content col-thin-left">
                <div class="category-list event-category-list has-list-view">

                    <div class="listing-filter listing-filter-event">
                        <div class="pull-left col-6 p-0">

                            <div class="breadcrumb-list"><a href="#" class="current"> <span>Locales y vendedores</span></a>
                                en
                                <span class="cityName"> {{ $region->name }} </span>
                            </div>

                        </div>
                        <div class="col-6 p-0 text-right listing-view-action hasEvent"><span
                                    class="e-list-view active"><i class="  icon-th"></i></span>  <span
                                    class="e-grid-view "><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>

                    <div class="menu-overly-mask"></div>

                    <div class="adds-wrapper">
                        <div class="row">

                            @foreach($commerces as $commerce)
                            <div class="col-md-4 col-sm-6 col-12 event-item-col">
                                <div class="card card-event info-overlay">
                                    <div class="img has-background" style="background-size:cover ">

                                        <a href="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}">
                                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                                 src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"> </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{ url('catalogo', $commerce->slug) }}">{{ $commerce->name }}</a>
                                        </h4>

                                        <div class="card-event-info">
                                            <p class="event-location"><i class="fa icon-location-1"></i>
                                                <a class="location" href="">{{ $commerce->address }} </a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-box  save-search-bar text-center"></div>
                </div>
                <div class="pagination-bar">
                    <nav aria-label="Page navigation " class="d-inline-b">
                        {!! $commerces->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection