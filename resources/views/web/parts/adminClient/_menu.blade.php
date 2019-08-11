<nav id="sidebar">
    <div class="sidebar-header">
        <h5>
            <a href="{{ url('cliente-perfil') }}">Celiacos Mendoza</a>
        </h5>
    </div>
    <div class="profile-bg">
        @if($commerce->logo)
            <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}"
                 class="img-responsive" width="70%">
        @else
            <img src="{{ asset('images/nodisp.png') }}" class="img-responsive" width="50%">
        @endif
    </div>
    <ul class="list-unstyled components">
        <li class="{{ request()->is('cliente-perfil') ? 'active' : '' }}">
            <a href="{{ url('cliente-perfil') }}">
                <i class="fas fa-tachometer-alt"></i>
                Panel Principal
            </a>
        </li>

        @if(Auth::user()->type == 'OWNER')

            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="fas fa-coffee"></i>
                    Productos <span class="badge badge-secondary bg-gray">{{ $countProductsAvailable }}</span>
                    <span class="badge badge-secondary bg-danger">{{ $countProductsDisable }}</span>
                    <i class="fas fa-angle-down fa-pull-right"></i>
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="{{ url('cliente-perfil/activos') }}">Productos Activos
                            <span class="badge badge-secondary float-md-right bg-gray">{{ $countProductsAvailable }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('cliente-perfil/desactivos') }}">Productos en Pausa
                            <span class="badge badge-secondary float-md-right bg-danger">{{ $countProductsDisable }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ request()->is('cliente-perfil/mensajes') ? 'active' : '' }}">
                <a href="{{ url('cliente-perfil/mensajes') }}">
                    <i class="fas fa-envelope-open"></i>
                    Mensajes
                    <span class="badge badge-secondary float-md-right bg-gray">{{ $countMessage }}</span>
                </a>
            </li>
            <li class="{{ request()->is('cliente-perfil/comentarios') ? 'active' : '' }}">
                <a href="{{ url('cliente-perfil/comentarios') }}">
                    <i class="fas fa-comments"></i>
                    Comentarios
                    <span class="badge badge-secondary float-md-right bg-gray">{{ $countComment }}</span>
                </a>
            </li>
            <li>
                <a href="{{ url('cliente-perfil/product/create') }}">
                    <i class="fas fa-cart-plus"></i>
                    Agregar Producto
                </a>
            </li>
        @endif
        <li>
            <a href="{{ url('cliente-perfil/historia') }}">
                <i class="fas fa-bullhorn"></i>
                Cuenta tu historia
            </a>
        </li>

        <li>
            <a href="{{ url('cliente-perfil/receta') }}">
                <i class="fas fa-utensils"></i>
                Subí tu receta
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- SIN POSICION -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7543412924958320"
         data-ad-slot="6567478476"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</nav>