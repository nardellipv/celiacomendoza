<div id="highlight" class="col-xl-12 content-box ">
    <div class="row row-featured" style="background-color: #e4ff005e;">
        <div class="col-xl-12  box-title" style="background-color: yellow;">
            <div class="inner"><h2><span>Productos </span> Destacados </h2>
            </div>
        </div>

        <div style="clear: both"></div>

        <div class=" relative  content featured-list-row  w100">

            <nav class="slider-nav has-white-bg nav-narrow-svg">
                <a class="prev">
                    <span class="nav-icon-wrap"></span>

                </a>
                <a class="next">
                    <span class="nav-icon-wrap"></span>
                </a>
            </nav>

            @if(count($highlights) <= 0)
                <h3 class="text text-center">Sin Productos Destacados</h3>
            @endif
            <div class="no-margin featured-list-slider ">
                @foreach($highlights as $highlight)
                    <div class="item"><a href="{{ url('producto', array($commerce->slug, $highlight->id)) }}">
                     <span class="item-carousel-thumb">
                    	<img src="{{ asset('images/thumbnail/products/'.($highlight->photo)) }}">
                     </span>
                            <span class="item-name"> {{ $highlight->name }} </span>
                            @if(!$highlight->offer)
                                <span class="price">$ {{ $highlight->price }}</span>
                            @else
                                <span class="price"><del>$ {{ $highlight->price }}</del></span>
                                <span class="price">$ {{ $highlight->offer }}</span>
                            @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
