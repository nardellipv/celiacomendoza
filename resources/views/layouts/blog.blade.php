<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Locales y vendedores de comida y productos para celíacos en mendoza.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios ">
    <title>Celiaco Mendoza | Blog</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('webStyle/css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('webStyle/css/color-green.css') }}">

    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/apple-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/apple-icon-144x144.png') }}">
    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/android-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/android-icon-144x144.png') }}">
    <link rel="shortcut icon" href="{{ asset('webStyle/assets/ico/favicon.png') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @include('external.analitycs')
</head>

<body>
@include('external.addthis')
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
                    <h2>Mercados para celiacos en Mendoza</h2>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Inner Banner -->

<!-- Blog -->
<section id="blog" class="p_b70 p_t70 bg_lightgry">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-sm-9 col-xs-12">
                @yield('content')
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                @include('web.parts._asideBlog')
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
{{--<script src="{{ asset('webStyle/js/bootsnav.js') }}"></script>--}}
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