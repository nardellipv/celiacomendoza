<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celiaco Mendoza | @yield('title','Comercios en Argentina 2019')</title>
    <meta name="description" content="@yield('meta-description','Locales y vendedores de comida y productos para celíacos en toda Argentina.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios')">

    <link sizes="72x72" href="{{ asset('webStyle/ico/apple-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/ico/apple-icon-144x144.png') }}">
    <link sizes="72x72" href="{{ asset('webStyle/ico/android-icon-72x72.png') }}">
    <link sizes="114x114" href="{{ asset('webStyle/ico/android-icon-144x144.png') }}">
    <link rel="shortcut icon" href="{{ asset('webStyle/ico/apple-icon-72x72.png') }}">

    <meta property="og:url" content="https://www.celiacosmendoza.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Comunidad de celiacos mendocinos dentro de la provincia."/>
    <meta property="og:description" content="Locales y vendedores de comida y productos para celíacos en Argentina.
    Guía práctica y simple para poder comparar precios y productos, y buscar locales cercanos a sus domicilios"/>
    <meta property="og:image" content="https://www.celiacosmendoza.com/webStyle/img/img-logo.png"/>

    <link href="{{ asset('webStyle/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/chosen.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/typography.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/flexslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/slick.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/calendar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/svg-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/shortcodes.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/js/responsive-menu/component.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/widget.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('webStyle/css/responsive.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
    @include('web.parts._menu')

    @if(Request::is('/'))
        <div class="food-banner-sec">
            <figure>
                <img src="{{ asset('webStyle/images/banner-img01.jpg') }}" alt="img here">
            </figure>
            <div class="banner-caption-options">
                <h1>Comercios Celíacos en Argentina</h1>
                <h2>Encuentra tu comida sin TACC en los distintos comercios adheridos.</h2>
                <div class="services-options">
                    {!! Form::open(['method' => 'POST','route' => ['searchCommerce'],'style'=>'find-search-engine']) !!}
                    {{ csrf_field() }}
                        <div class="select">
                            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                            <select name="provinceSearch" class="chosen-select">
                                @foreach($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="food-textfelid">
                            <label><a href="#"><button type="submit" style="background: none;color: white;"><i class="fa icon-search-1" aria-hidden="true"></i></button></a>
                                <input type="text" name="commerceSearch" placeholder="Nombre del local...">
                            </label>
                        </div>
                    {!! Form::Close() !!}
                </div>
                <div class="food-services-restaurant">
                    <ul>
                        <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i>Comentarios</a></li>
                        <li><a href="#"><i class="fa fa-cutlery" aria-hidden="true"></i>Restaurant</a></li>
                        <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>Información</a></li>
                        <li><a href="#"><i class="fa fa-location-arrow" aria-hidden="true"></i>Direcciones</a></li>
                        <li><a href="#"><i class="fa fa-motorcycle" aria-hidden="true"></i>Delivery</a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>Teléfonos</a></li>
                        <li><a href="#"><i class="fa fa-smile-o" aria-hidden="true"></i>Calificación</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @else
        <div class=" inner-velue">
            <div class="innner-page-title">
                <h2>{{ $province->name }} {{ Request::is('argentina/busqueda/*') ? ' - '. $region->name : '' }}</h2>
            </div>
        </div>
    @endif

    <div class="content">
        <section class="">
            @yield('content')
        </section>

        @section('features')
        @show

        @include('web.parts._lastBlog')
    </div>
    <footer class="footer-sec">
        <div class="restrurent-footer-sections">
            <div class="footer-contact-point">
                <div class="container">
                    <ul>
                        <li><a href="#"><i class="fa fa-map" aria-hidden="true"></i>Las Heras, Mendoza, Argentina</a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@celiacosmendoza.com</a>
                        </li>
                        <li><img src="{{ asset('webStyle/img/img-logo.png')}}" alt="celiacosmendoza"
                                 style="margin-left: 75%;"></li>
                    </ul>
                </div>
            </div>
            <div class="food-creater-by-service">
                <div class="container">
                    <div class="infomation-service-last">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <h6>© Copyright 2019 denarMA</h6>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="admin-infomation">
                                    <li><a href="{{ url('terminos') }}">Términos y Condiciones</a></li>
                                    <li><a href="{{ url('politicas') }}">Politicas de privacidad</a></li>
                                    <li><a href="#">Ayuda</a></li>
                                    <li><a href="{{ url('blog') }}">Blogs</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="food-social-icons">
                                    <li><a href="https://www.facebook.com/celiacosmendozaOK" target="_blank"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/calendar.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery.bxslider.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery-filterable.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/jquery.accordion.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/range-slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/responsive-menu/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/responsive-menu/jquery.dlmenu.js')}}"></script>
<script type="text/javascript" src="{{ asset('webStyle/js/functions.js')}}"></script>
</body>
</html>