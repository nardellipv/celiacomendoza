<header id="navbar-spy" class="header header-4 transparent-header ">
    <nav id="primary-menu" class="navbar navbar-fixed-top affix-top">
        <div class="container">
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
                        <a href="{{ url('compra', $commerce->id) }}">
                            <i class="fa fa-shopping-cart" style="color:yellow;"></i>
                            <span class="title">Compra</span>
                            <span class="cart-label">{{ $cartCount }}</span>
                        </a>
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
                <h2 style="text-align:  center;color: white;">Listado de compra</h2>
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
