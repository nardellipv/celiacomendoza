<header id="main_header_2">
    <div id="header-top">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-contact">
                        <p>Para más información: <span itemprop="email">info@celiacosmendoza.com</span>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top_right_links2">
                        <ul class="top_links">
                            <li><a href="{{ url('cliente-perfil') }}"><i class="fa fa-user-o" aria-hidden="true"></i>
                                    Perfíl</a></li>
                            @if (Auth::check())
                                <li>Bienvenido {{ Auth::user()->name }}</li>
                            @else
                                <li><a href="{{ url('login') }}"><i class="fa fa-lock" aria-hidden="true"></i> Ingresar
                                        /
                                        Registrarse</a></li>
                            @endif
                        </ul>
                        @if (Auth::check())
                            <div class="add-listing"><a href="{{ url('cliente-perfil/product/create') }}"><i
                                            class="fa fa-plus" aria-hidden="true"></i> Subir producto</a></div>
                        @else
                            <div class="add-listing"><a href="{{ url('cliente-perfil/product/create') }}"><i
                                            class="fa fa-plus" aria-hidden="true"></i> Subir local</a></div>
                        @endif
                    </div>
                </div>
                <div class="top_right_links2-bg"></div>
            </div>
        </div>
    </div>
    @include('web.parts._menu')
</header>