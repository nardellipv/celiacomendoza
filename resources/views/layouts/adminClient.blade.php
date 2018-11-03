<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/apple-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/apple-icon-144x144.png') }}">
    <link sizes="72x72" href="{{ asset('webStyle/assets/ico/android-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/assets/ico/android-icon-144x144.png') }}">
    <link rel="shortcut icon" href="{{ asset('webStyle/assets/ico/favicon.png') }}">

    <title>Celiaco Mendoza | Administación</title>
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

    @include('external.analitycs')

    @include('external.pixelFace')

    {{--@include('external.hotkey')--}}
</head>
<body>

<div id="wrapper">


    @include('web.parts._header')

    <div class="main-container">
        <div class="container">
            @if(Request::is('cliente-perfil'))
            @if(!$commerce->about OR !$commerce->logo)
                <div class="alert alert-warning alert-dismissible fade show text text-center" role="alert">
                    <strong><i class="fa fa-thumbs-down fa-2x"></i> ¡¡¡Termina de completar tus datos!!!</strong>
                    Faltan completar datos de tu local, te recomendamos completarlos para que mucha más gente te encuentre.<p>
                    Campos requeridos, contar sobre tu local y el logo de tu local.
                    <p><i class="fa fa-exclamation-triangle"></i> Tu local no se publicará hasta que no se complete la información requerida</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @endif
            @yield('content')
        </div>
        {{--ads--}}
        <div class="main-container">
            <div class="container">
                <div class="offset-md-3">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- IndexUP -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-7543412924958320"
                         data-ad-slot="3230632682"
                         data-ad-format="link"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
    @include('web.parts._footer')

</div>

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script>window.jQuery || document.write('<script src="webStyle/assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>-->

<script src="{{ asset('webStyle/assets/js/vendors.min.js') }}"></script>

<!-- include custom script for site  -->
<script src="{{ asset('webStyle/assets/js/main.min.js') }}"></script>


<!-- include jquery autocomplete plugin  -->
<script type="text/javascript" src="{{ asset('webStyle/assets/plugins/autocomplete/jquery.mockjax.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('webStyle/assets/plugins/autocomplete/jquery.autocomplete.js') }}"></script>

<script type="text/javascript" src="{{ asset('webStyle/assets/plugins/autocomplete/autocomplete-demo.js') }}"></script>

@yield('script')

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591dcb7e764af49d"></script>

</body>
</html>
