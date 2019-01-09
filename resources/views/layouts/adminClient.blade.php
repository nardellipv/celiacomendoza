<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Locales y vendedores de comida y productos para celíacos en mendoza.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios ">
    <title>Celiaco Mendoza</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('webStyle/css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('webStyle/css/color-green.css') }}">

    <link sizes="72x72" href="{{ asset('webStyle/ico/apple-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/ico/apple-icon-144x144.png') }}">
    <link sizes="72x72" href="{{ asset('webStyle/ico/android-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/ico/android-icon-144x144.png') }}">
    <link rel="shortcut icon" href="{{ asset('webStyle/ico/apple-icon-72x72.png') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('external.analitycs')

    @include('external.pixelFace')

</head>
<body>

<!-- LOADER -->
<div class="loader">
    <div class="cssload-svg"><img src="{{ asset('webStyle/img/42-3.gif') }}" alt="image">
    </div>
</div>
<!--LOADER-->

<!-- HEADER -->
@include('web.parts._header')
<!-- HEADER -->

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

<!-- Popular Listing -->
@yield('content')
<!-- Popular Listing -->

<!-- Footer -->
@include('web.parts._footer')
<!-- Footer -->

<script src="{{ asset('webStyle/js/jquery.2.2.3.min.js') }}"></script>
<script src="{{ asset('webStyle/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('webStyle/js/jquery.appear.js') }}"></script>
<script src="{{ asset('webStyle/js/jquery-countTo.js') }}"></script>
<script src="{{ asset('webStyle/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('webStyle/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('webStyle/js/bootsnav.js') }}"></script>
<script src="{{ asset('webStyle/js/zelect.js') }}"></script>
<script src="{{ asset('webStyle/js/dropzone.min.js') }}"></script>
<script src="{{ asset('webStyle/js/parallax.min.js') }}"></script>
<script src="{{ asset('webStyle/js/modernizr.custom.26633.js') }}"></script>
<script src="{{ asset('webStyle/js/jquery.gridrotator.js') }}"></script>
<script src="{{ asset('webStyle/js/functions.js') }}"></script>
</body>

</html>