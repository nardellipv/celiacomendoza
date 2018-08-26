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
    <link href="{{asset('webStyle/images/favicon/favicon.ico')}}" rel="icon">


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
    <title>Celiaco Mendoza</title>
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

    @include('web.parts._header')

    @include('web.parts._features')

    @include('web.parts._companies')

    @include('web.parts._footer')

</div>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{asset('webStyle/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('webStyle/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('webStyle/js/functions.js')}}"></script>

</body>
</html>