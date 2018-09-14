<aside>
    <div class="sidebar-modern-inner">
        <div class="block-title ">
            <h5><a href="#">Regiones</a></h5>
        </div>
        <div class="block-content categories-list  list-filter ">
            <ul class="browse-list list-unstyled long-list">
                @foreach($allRegion as $region)
                    <li><a href="{{ url('region', $region->slug) }}" title="{{ $region->name }}">{{ $region->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div style="clear:both"></div>
    </div>
</aside>