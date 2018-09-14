<div id="region" class="main-container">
    <div class="container">

        <div class="w100 content-box content-box-map no-bg">
            <div class=" row-featured row-featured-category">
                <div class="  box-title no-border">
                    <div class="inner">
                        <h2><span class="icon-map"></span> <span>Filtar por</span> Localidad </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div id="map-list" class="row">
                            @foreach($regions->chunk(6) as $chunk)
                            <ul class="list-link list-unstyled col-xl-4 col-4">
                                @foreach($chunk as $region)
                                    <li><a href="{{ url('region', $region->slug) }}" title="{{ $region->name }}">{{ $region->name }}</a></li>
                                @endforeach
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <img src="{{ asset('webStyle/images/add2.jpg') }}">
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
</div>