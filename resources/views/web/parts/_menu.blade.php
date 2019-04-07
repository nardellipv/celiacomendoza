<header class="food-header">
    <div class="food-toptemplate">
        <div class="container-fluid">
            <div class="logo-img">
                <a href="{{ url('/') }}"><img src="{{ asset('webStyle/img/img-logo.png')}}" alt="celiacos mendoza"></a>
            </div>
            <div class="food-navigaion-template">
                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Menu</button>
                    <ul class="dl-menu">
                        <li><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown">Inicio</a></li>
                        <li><a href="{{ url('blog') }}" class="dropdown-toggle" data-toggle="dropdown">Blog</a></li>
                        <li><a href="{{ url('listado') }}" class="dropdown-toggle" data-toggle="dropdown">
                                Productos ANMAT</a></li>
                        <li><a href="#contact-us" class="dropdown-toggle" data-toggle="dropdown">Contacto</a></li>
                        <li>
                            <a href="listing-grid.html">Ayuda</a>
                            <ul class="children">
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

                {{--menu destop--}}
                <nav class="food-navigaion">
                    <ul class="nav-menu">
                        <li><a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown">Inicio</a></li>
                        <li><a href="{{ url('blog') }}" class="dropdown-toggle" data-toggle="dropdown">Blog</a></li>
                        <li><a href="{{ url('listado') }}" class="dropdown-toggle" data-toggle="dropdown">
                                Productos ANMAT</a></li>
                        <li><a href="#contact-us" class="dropdown-toggle" data-toggle="dropdown">Contacto</a></li>
                        <li>
                            <a href="listing-grid.html">Ayuda</a>
                            <ul class="children">
                                <li><a href="{{ url('terminos') }}">Términos y Condiciones</a>
                                </li>
                                <li><a href="{{ url('politicas') }}">Politicas de privacidad</a>
                                </li>
                                <li><a href="#">Ayuda</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="food-right-template">
                    <ul>
                        <li><a href="{{ __('Login') }}" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 7px;font-size: 15px;color: red;">Registrarme</a></li>
                        <li>
                            <button class="login-account"><i
                                        class="fa icon-user" aria-hidden="true"></i></button>
                        </li>
                        <li>
                            {!! Form::open(['method' => 'POST','route' => ['searchOnlyCommerce'],'style'=>'find-search-engine']) !!}
                            {{ csrf_field() }}
                                <button class="mein-search fa icon-search-1" type="button"
                                        title="Buscar local"></button>
                                <div class="hide-class-o">
                                    <div class="hide-text-holder">
                                        <input type="text" name="searchCommerce" data-toggle="toggle" placeholder="Buscar Local"/>
                                        <button type="submit" title="Buscar"><i class="fa fa-search"
                                                                               aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            {!! Form::Close() !!}
                        </li>
                    </ul>
                </div>
            </div>
            @include('web.parts.alerts.errorSearch')
        </div>
    </div>

    @if (Auth::guest())
        <div class="header-serach-food">
            <div class="container-fluid">
                <div class="food-title">
                    <h3>Ingresar</h3>
                </div>
                <form method="POST" action="{{ route('login') }}"
                      aria-label="{{ __('Login') }}" class="find-search-engine">
                    @csrf
                    <div class="form-engine-selecter" style="width: 67%;">
                        <ul class="row">
                            <li class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') }}" placeholder="Email" required
                                       autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </li>
                            <li class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <button type="submit">{{ __('Login') }}</button>
                    <h3>
                        <a href="{{ route('password.request') }}">
                            {{ __('¿Olvidé mi contraseña?') }}
                        </a>
                    </h3>
                </form>
            </div>
        </div>
    @endif
</header>