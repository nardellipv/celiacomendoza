<header id="navbar-spy" class="header header-4 transparent-header ">
    <nav id="primary-menu" class="navbar navbar-fixed-top affix-top">
        <div class="container">
            <div class="navbar-header">
                <h2 style="text-align:  center;color: white;margin-top: 50px;">{{ $commerce->name }}</h2>
            </div>
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="has-dropdown">
                        <a href="{{ url('/') }}" class="dropdown-toggle link-hover" data-hover="home">Home</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ url('catalogo', $commerce->id) }}#listOffers" class="dropdown-toggle link-hover"
                           data-hover="Ofertas">Ofertas</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ url('catalogo', $commerce->id) }}#highlight" class="dropdown-toggle link-hover"
                           data-hover="Destacados">Destacados</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ url('catalogo', $commerce->id) }}#social" class="dropdown-toggle link-hover"
                           data-hover="Social">Social</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="{{ url('contacto', $commerce->id) }}" class="dropdown-toggle link-hover"
                           data-hover="Contacto">Contacto</a>
                    </li>

                </ul>
                <div class="module module-cart pull-left">
                    <div class="module-icon cart-icon">
                        @if($cartCount > 0)
                            <a href="{{ url('compra', $commerce->id) }}">
                                <i class="fa fa-shopping-cart" style="color:yellow;"></i>
                                <span class="title">Compra</span>
                                <span class="cart-label">{{ $cartCount }}</span>
                            </a>
                        @else
                            <i class="fa fa-shopping-cart" style="color:yellow;"></i>
                            <span class="title">Compra</span>
                            <span class="cart-label">{{ $cartCount }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>


<section id="page-title" class="page-title bg-overlay bg-overlay-dark">
    <div class="bg-section">
        <img src="{{asset('webStyle/images/page-title/header-market.jpg')}}" alt="Background"/>
    </div>
</section>