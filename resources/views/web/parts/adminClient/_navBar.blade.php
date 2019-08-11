<nav class="navbar navbar-default mb-xl-5 mb-4">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <!-- Search-from -->
        <script data-cfasync='false' type='text/javascript'
                src='//p361587.clksite.com/adServe/banners?tid=361587_708467_2'></script>
        <!--// Search-from -->
        <ul class="top-icons-agileits-w3layouts float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu drop-3">
                    <div class="profile d-flex mr-o">
                        <div class="profile-r align-self-center">
                            <h3 class="sub-title-w3-agileits">Hola, {{ Auth::user()->name }}</h3>
                            <a href="mailto:info@example.com">{{ Auth::user()->email }}</a>
                        </div>
                    </div>
                    <a href="{{ url('cliente-perfil/perfil') }}" class="dropdown-item mt-3">
                        <h4>
                            <i class="far fa-user mr-3"></i>Mi Perfil</h4>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="dropdown-item mt-3">
                        <i class="fas fa-sign-out-alt mr-3"></i>Salir
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>