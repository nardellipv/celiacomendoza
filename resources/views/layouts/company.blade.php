<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Document Meta
        ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description"
          content="Mount is a pixel perfect creative multi purpose html5 template based on designed with great attention to details, flexibility and performance. It is ultra professional, smooth and sleek, with a clean modern layout">
    <link href="assets/images/favicon/favicon.ico" rel="icon">


    <!-- Fonts
        ============================================= -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100italic,100,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700italic,700,800,800italic,900,900italic%7COpen+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic%7CUbuntu:400,300,300italic,400italic,500,700,500italic,700italic%7CRoboto+Slab:400,100,300,700%7CLora:400,400italic,700,700italic'
          rel='stylesheet' type='text/css'>

    <!-- Stylesheets
        ============================================= -->
    <link href="{{asset('webStyle/css/external.css')}}" rel="stylesheet">
    <link href="{{asset('webStyle/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webStyle/css/style.css')}}" rel="stylesheet">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('webStyle/revolution/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('webStyle/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('webStyle/revolution/css/navigation.css')}}">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{asset('webStyle/js/html5shiv.js')}}"></script>
    <script src="{{asset('webStyle/js/respond.min.js')}}"></script>
    <![endif]-->

    <!-- Document Title
        ============================================= -->
    <title>{{ $commerce->name }}</title>
</head>
<body>

<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div id="wrapper" class="wrapper clearfix">

    <div id="back-to-top" class="backtop show">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <header id="navbar-spy" class="header header-4 transparent-header ">
        <nav id="primary-menu" class="navbar navbar-fixed-top affix-top">
            <div class="container">
                <div class="navbar-header">
                        <h2 style="color: white; margin-top: 10%;">{{ $commerce->name }}</h2>
                </div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-1" aria-expanded="false">
                        <a class="logo" href="index.html">
                            <img src="{{asset('webStyle/images/logo/logo-light.png')}}" alt="Mount Template">
                        </a>
                </div>
                <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="has-dropdown">
                            <a href="{{ url('/') }}" class="dropdown-toggle link-hover" data-hover="home">Home</a>
                        </li>
                    </ul>
                    <div class="module module-cart pull-left">
                        <div class="module-icon cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">shop cart</span>
                            <span class="cart-label">2</span>
                        </div>
                        <div class="module-content cart-box">
                            <div class="cart-overview">
                                <ul class="list-unstyled">
                                    <li>
                                        <img class="img-responsive" src="{{asset('webStyle/images/shop/thumb/7.jpg')}}"
                                             alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">Flasks Bottle</h5>
                                            <p class="product-price">Price: $20.00 </p>
                                            <p class="product-quantity">Quantity: 2</p>
                                        </div>
                                        <a class="cancel" href="#">cancel</a>
                                    </li>
                                    <li>
                                        <img class="img-responsive" src="{{asset('webStyle/images/shop/thumb/8.jpg')}}"
                                             alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">old sketch book</h5>
                                            <p class="product-price">Price: $120.00 </p>
                                            <p class="product-quantity">Quantity: 3</p>
                                        </div>
                                        <a class="cancel" href="#">cancel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    <h5>CART SUBTOTAL :</h5>
                                </div>
                                <div class="total-price">
                                    <h5>$248.00</h5>
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart-control">
                                <a class="btn btn-secondary btn-block" href="#">view cart</a>
                                <a class="btn b btn-primary btn-block" href="#">Proceed To Checkout</a>
                            </div>
                        </div>
                    </div>
                    <div class="module module-search pull-left">
                        <div class="module-icon search-icon">
                            <i class="fa fa-search"></i>
                            <span class="title">search</span>
                        </div>

                    </div>
                </div>
            </div>
            <div id="top-bar" class="top-bar">
                <div class="container">
                    <div class="top-bar-border">
                        <div class="row">
                            <div class="col-xs-12 hidden-xs">
                                <ul class="list-inline top-contact">
                                    <li>
                                        <p style="color: white">Teléfono: <span
                                                    style="color: #ffff00">{{ $commerce->phone }}</span></p>
                                    </li>
                                    <li>
                                        <p style="color: white">Email: <span
                                                    style="color: #ffff00">{{ $commerce->user->email }}</span></p>
                                    </li>
                                    <li>
                                        <p style="color: white">Dirección: <span
                                                    style="color: #ffff00">{{ $commerce->address }}</span></p>
                                    </li>
                                    <li>
                                        <p style="color: white">Localidad: <span
                                                    style="color: #ffff00">{{ $commerce->location }}</span></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 text-right text-center-xs">
                                <ul class="list-inline top-widget top-widget-social">
                                    <li class="top-social">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="module-search-box">
            <div class="module-content search-box">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12  col-sm-12  col-md-12">
                            <form class="search-form">
                                <input type="text" class="form-control" placeholder="Type Search Words Then Enter">
                                <a class="search-cancel" href="#"><i class="fa fa-close"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .module-search-box end -->
    </header>
    <section id="page-title" class="page-title bg-overlay bg-overlay-dark">
        <div class="bg-section">
            <img src="{{asset('webStyle/images/page-title/header-market.jpg')}}" alt="Background"/>
        </div>
    </section>

    @yield('content')

    @include('web.parts._footer')

</div>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('webStyle/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('webStyle/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('webStyle/js/functions.js')}}"></script>
</body>
</html>