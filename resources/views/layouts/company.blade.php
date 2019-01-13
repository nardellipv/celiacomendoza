<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts._head')

<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- LOADER -->
<div class="loader">
    <div class="cssload-svg"><img src="{{ asset('webStyle/img/42-3.gif') }}" alt="image">
    </div>
</div>
<!--LOADER-->

<!-- HEADER -->
@include('web.parts._header')
<!-- HEADER  -->

<!-- Inner Banner -->
<section id="inner-banner-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="inner_banner_2_detail">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Listing Details Heading -->
<section id="listing-details" class="p_b70 p_t70">
    <div class="container">
        @yield('contentAbout')
        <div class="row m_t40">
            <div class="col-md-8 col-sm-8 col-xs-12">
                @yield('content')
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                @if (Request::is('region/*'))
                    @include('web.parts._region')
                @else
                    @include('web.parts._asideCommerce')
                @endif
            </div>
        </div>
    </div>
</section>
<!-- Listing Details Heading -->

<!-- Footer -->
@include('web.parts._footer')
<!-- Footer -->

<script src="{{ asset('webStyle/js/jquery.2.2.3.min.js') }}"></script>
<script src="{{ asset('webStyle/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('webStyle/js/jquery.appear.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/jquery-countTo.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/owl.carousel.min.js') }}"></script>--}}
<script src="{{ asset('webStyle/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('webStyle/js/bootsnav.js') }}"></script>
{{--<script src="{{ asset('webStyle/js/modernizr.custom.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/grid.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/zelect.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/parallax.min.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/modernizr.custom.26633.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/jquery.gridrotator.js') }}"></script>--}}
{{--<script src="{{ asset('webStyle/js/richmarker-compiled.js') }}"></script>--}}
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
{{--<script src="{{ asset('webStyle/js/google-map.js') }}"></script>--}}
<script src="{{ asset('webStyle/js/functions.js') }}"></script>
<script>
    $(function () {
        Grid.init();
    });
</script>

</body>

</html>