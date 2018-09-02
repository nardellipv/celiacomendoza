<header id="navbar-spy" class="header header-1 header-6 transparent-header ">
    <nav id="primary-menu" class="navbar navbar-fixed-top affix-top">
        <div class="container">
            <div class="navbar-header">
                <a class="logo" href="{{url('/')}}">
                    <img src="{{asset('webStyle/images/logo/logo-light.png')}}" alt="Mount Template">
                </a>
            </div>
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="has-dropdown">
                        <a href="{{ url('/') }}" class="dropdown-toggle link-hover" data-hover="home">Home</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#caracteristicas" data-scroll="scrollTo" data-hover="Características">Características</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#locales" data-scroll="scrollTo" data-hover="Locales">Locales</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#footer" data-scroll="scrollTo" data-hover="Contactenos">Contactenos</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#" data-toggle="modal" data-target=".login-modal-lg" data-hover="Ingresar/Registrarse">Ingresar/Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="page-title" class="page-title bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="{{asset('webStyle/images/page-title/header.jpg')}}" alt="Background"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="title-1 text-center">
                    <div class="title-heading">
                        <h1 style="color: white;">Guía Comercial para celiacos en Mendoza</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.parts._modalLogin')