<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset('webStyle/assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{ asset('webStyle/assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{ asset('webStyle/assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
          href="{{ asset('webStyle/assets/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel="shortcut icon" href="webStyle/assets/ico/favicon.png">
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('webStyle/assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">


    <link href="{{ asset('webStyle/assets/css/style.css') }}" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="{{ asset('webStyle/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('webStyle/assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="{{ asset('webStyle/assets/plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="{{ asset('webStyle/assets/js/pace.min.js') }}"></script>
    <script src="{{ asset('webStyle/assets/plugins/modernizr/modernizr-custom.js') }}"></script>


</head>
<body>

<div id="wrapper">


    @include('web.parts._header')


    <div class="main-container">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('web.parts._footer')

</div>

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="webStyle/assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>

<script src="{{ ('webStyle/assets/js/vendors.min.js') }}"></script>

<!-- include custom script for site  -->
<script src="{{ ('webStyle/assets/js/main.min.js') }}"></script>


<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="{{ ('webStyle/assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript" src="{{ ('webStyle/assets/plugins/autocomplete/jquery.autocomplete.js') }}"></script>

<script type="text/javascript" src="{{ ('webStyle/assets/plugins/autocomplete/autocomplete-demo.js') }}"></script>

@yield('script')

</body>
</html>
