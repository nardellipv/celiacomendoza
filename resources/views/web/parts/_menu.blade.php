<nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i>
                    </button>
                    <a href="{{ url('/') }}" class="navbar-brand logo logo-title">
                        <img src="{{ asset('webStyle/img/logo-text.png') }}" alt="logo" style="margin-top: -15px;">
                    </a>
                    </a>
                </div>
                <!-- End Header Navigation -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li> <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown">Inicio</a></li>
                        <li> <a href="{{ url('blog') }}" class="dropdown-toggle" data-toggle="dropdown">Blog</a></li>
                        <li> <a href="#contact-us" class="dropdown-toggle" data-toggle="dropdown">Contacto</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('terminos') }}">Términos y Condiciones</a>
                                </li>
                                <li><a href="{{ url('politicas') }}">Politicas de privacidad</a>
                                </li>
                                <li><a href="#">Ayuda</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>