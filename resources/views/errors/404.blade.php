<!DOCTYPE html>
<html lang="es">
<head>
    <title>Error 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="{{ asset('webStyle/errors/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<body>
<div class="container demo-2">
    <div class="content">
        <div id="large-header" class="large-header">
            <h1 class="header-w3ls">Pagina no encontrada</h1>
            <p class="w3-agileits1">Oops!</p>
            <canvas id="demo-canvas"></canvas>
            <img src="{{ asset('webStyle/errors/images/owl.gif') }}" alt="flashy" class="w3l">
            <h2 class="main-title">404</span></h2>
            <p class="w3-agileits2">No hemos podido encontrar lo que andabas bucando.
                <a href="{{ url('/') }}" style="color: white; font-size:  20px;">Volver</a>
            </p>
            <p class="copyright">© 2018 | Design by <a href="https://mikant.com/" target="_blank">MikAnt</a></p>
        </div>
    </div>
</div>
<script src="{{ asset('webStyle/errors/js/rAF.js') }}"></script>
<script src="{{ asset('webStyle/errors/js/demo-2.js') }}"></script>
</body>
</html>