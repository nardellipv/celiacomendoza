{{--{{dd(public_path('images/thumbnail/'.$commerce->logo))}}--}}
@if (Auth::check())
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto navbar-right">
            <li class="dropdown no-arrow nav-item"><a href="#" class="dropdown-toggle nav-link"
                                                      data-toggle="dropdown">

                    <span>Hola, {{ Auth()->user()->name}}</span><i class="icon-user fa"></i> <i
                            class="icon-down-open-big fa"></i></a>
                <ul class="dropdown-menu user-menu dropdown-menu-right">
                    <li class="active dropdown-item"><a href="{{ url('cliente-perfil') }}"><i class="icon-home"></i>
                            Panel Principal
                        </a>
                    </li>
                    <li class="dropdown-item"><a href="{{ url('cliente-perfil/activos') }}">
                            <i class="fa fa-check-circle"></i>
                            Productos Activos
                        </a>
                    </li>
                    <li class="dropdown-item"><a href="{{ url('cliente-perfil/desactivos') }}">
                            <i class="fa fa-times-circle"></i>
                            Productos Desactivos </a>
                    </li>
                    <li class="dropdown-item"><a href="{{ url('cliente-perfil/ventas') }}">
                            <i class="fa fa-shopping-cart"></i>
                            Productos Vendidos </a>
                    </li>
                    <li class="dropdown-item"><a href="{{ url('cliente-perfil/mensajes') }}"><i class="icon-mail"></i>
                            Mensajes </a>
                    </li>
                    <li class="dropdown-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class=" icon-logout "></i>
                            Salir
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>

            <li class="postadd nav-item"><a class="btn btn-block btn-border btn-post btn-danger nav-link"
                                            href="{{ url('cliente-perfil/product/create') }}">Subir un Producto</a>
            </li>
        </ul>
    </div>
@else
    <ul class="nav navbar-nav ml-auto navbar-right">
        <li class="nav-item"><a href="{{ url('login') }}" class="nav-link"><i class="fa fa-sign-in-alt"></i>
                Ingresar</a>
        </li>
        <li class="nav-item"><a href="{{ url('register') }}" class="nav-link" style="color: red"><i class="fa fa-user-plus"></i>
                Registrarse</a>
        </li>

        @if (!Request::is('/'))
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="fa fa-home"></i> Pagina
                    Princial</a>
            </li>
        @endif

        @if (Request::is('catalogo/*'))
            <li class="nav-item"><a href="{{url('listado', $commerce->slug)}}" class="nav-link"><i
                            class="fa fa-cookie-bite"></i> Productos</a>
            </li>
            <li class="nav-item"><a href="{{ url('contacto', $commerce->slug) }}" class="nav-link"><i
                            class="fa fa-paper-plane"></i> Contacto</a>
            </li>
        @endif

        @if (Request::is('contacto/*') OR Request::is('producto/*/*'))
            <li class="nav-item"><a href="{{ url()->previous() }}" class="nav-link"><i class="fa fa-undo"></i>
                    Volver</a>
            </li>
        @endif

        @if (Request::is('catalogo/*') OR Request::is('producto/*/*') OR Request::is('contacto/*') OR Request::is('listado/*'))
            <li class="nav-item">
                <div id="ex4">
                    <a href="{{ url('compra', $commerce->slug) }}" style="color:#00B233;">
                  <span class="p1 fa-stack fa-2x has-badge" data-count="{{ $cartCount }}">
                    <i class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse" data-count="4b"></i>
                  </span>
                    </a>
                </div>
            </li>
        @endif
    </ul>
@endif