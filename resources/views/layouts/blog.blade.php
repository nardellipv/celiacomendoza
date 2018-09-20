<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Locales y vendedores de comida para celíacos en mendoza.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios ">
    <!-- Fav and touch icons -->
    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/apple-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/apple-icon-144x144.png') }}">
    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/android-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/android-icon-144x144.png') }}">
    <link rel="shortcut icon" href="{{ asset('webStyle/assets/ico/favicon.png') }}">

    <title>Celiaco Mendoza</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('webStyle/assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">


    <link href="{{ asset('webStyle/assets/css/style.css') }}" rel="stylesheet">

    {{--custom--}}
    <link href="{{ asset('webStyle/assets/css/custom.css') }}" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="{{ asset('webStyle/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('webStyle/assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="{{ asset('webStyle/assets/plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ asset('webStyle/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('webStyle/assets/plugins/modernizr/modernizr-custom.js') }}"></script>

    @include('external.analitycs')
</head>

<body>

    @include('external.addthis')
<div id="wrapper">

    <div class="intro-inner">
        <div class="about-intro" style="
                background:url({{ asset('webStyle/img/header-market.jpg') }}) no-repeat center;
                background-size:cover;">
            <div class="dtable hw100">
                <div class="dtable-cell hw100">
                    <div class="container text-center">
                        <h2 style="font-size: 27px; color: white;font-weight: bold;"> Mercados para celiacos en Mendoza </h2>
                        <h3 style="font-size: 23px; color: white;font-weight: bold;">Nuestro Blog</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--/.about-intro -->

    </div>

@include('web.parts._header')
<!-- /.header -->

    <div class="main-container inner-page">
        <div class="container">
            <div class="section-content">
                <div class="row ">
                    <div class="col-sm-8 blogLeft">
                        <div class="blog-post-wrapper">

                            @yield('content')

                        </div>
                    </div>
                    <div class="col-sm-4 blogRight page-sidebar">

                        @include('web.parts._asideBlog')

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('web.parts._footer')

</div>

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="webStyle/assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>

<script src="{{ ('webStyle/assets/js/vendors.min.js') }}"></script>

<!-- include custom script for site  -->
<script src="{{ ('webStyle/assets/js/main.min.js') }}"></script>

</body>
</html>
