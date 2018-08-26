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
                </ul>
                <div class="module module-cart pull-left">
                    <div class="module-icon cart-icon">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="title">shop cart</span>
                        <span class="cart-label">2</span>
                    </div>
                    <div class="module-content cart-box">
                        <div class="cart-overview">
                            <ul class="list-unstyled">
                                <li>
                                    <img class="img-responsive" src="{{asset('webStyle/images/shop/thumb/7.jpg')}}"
                                         alt="product"/>
                                    <div class="product-meta">
                                        <h5 class="product-title">Flasks Bottle</h5>
                                        <p class="product-price">Price: $20.00 </p>
                                        <p class="product-quantity">Quantity: 2</p>
                                    </div>
                                    <a class="cancel" href="#">cancel</a>
                                </li>
                                <li>
                                    <img class="img-responsive" src="{{asset('webStyle/images/shop/thumb/8.jpg')}}"
                                         alt="product"/>
                                    <div class="product-meta">
                                        <h5 class="product-title">old sketch book</h5>
                                        <p class="product-price">Price: $120.00 </p>
                                        <p class="product-quantity">Quantity: 3</p>
                                    </div>
                                    <a class="cancel" href="#">cancel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-total">
                            <div class="total-desc">
                                <h5>CART SUBTOTAL :</h5>
                            </div>
                            <div class="total-price">
                                <h5>$248.00</h5>
                            </div>
                        </div>
                        <div class="clearfix">
                        </div>
                        <div class="cart-control">
                            <a class="btn btn-secondary btn-block" href="#">view cart</a>
                            <a class="btn b btn-primary btn-block" href="#">Proceed To Checkout</a>
                        </div>
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
    </nav>
    <div class="module-search-box">
        <div class="module-content search-box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12  col-sm-12  col-md-12">
                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del producto">
                            <a class="search-cancel" href="#"><i class="fa fa-close"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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