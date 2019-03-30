@extends('layouts.login')

@section('content')
    <section id="login-register" class="p_b70 p_t70">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab"
                                                                  data-toggle="tab">ingresar</a>
                        </li>
                        <li role="presentation"><a href="#registerd" aria-controls="registerd" role="tab"
                                                   data-toggle="tab">Registrarse</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="login">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="login-register-bg">

                                <div class="row">

                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="heading">
                                            <h2>Ingresar</h2>
                                        </div>

                                        <form method="POST" action="{{ route('login') }}"
                                              aria-label="{{ __('Login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" placeholder="Email"
                                                       required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" placeholder="Contraseña" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recordarme') }}
                                                </label> <a href="#">|</a>
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('¿Olvidá mi contraseña?') }}
                                                </a>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="social-register-bg">

                                            <h2>Registrarte como vendedor </h2>

                                            <p>Si vendes alimentos sin Tacc o sos proveedor de productos sin gluten o
                                                solamente haces viandas para celíacos, en toda la provincia de Mendoza y
                                                queres llegar a más clientes, te invitamos a registrarte en nuestra
                                                web.</p>
                                            <p>Es simple, llega a todo Mendoza y lo más importante es GRATIS!!!</p>
                                            <p>Registrate y empeza a vender</p>


                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="registerd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="login-register-bg">

                                <div class="row">

                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="heading">
                                            <h2>Crear una nueva <span>cuenta</span></h2>
                                        </div>

                                        <form method="POST" action="{{ route('register') }}"
                                              aria-label="{{ __('Register') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name" value="{{ old('name') }}" placeholder="Nombre"
                                                       required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                       name="lastname" value="{{ old('lastname') }}"
                                                       placeholder="Apellido" required autofocus>
                                                <small id="passwordHelpBlock" class="text text-info">
                                                    No será público
                                                </small>

                                                @if ($errors->has('lastname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" placeholder="Email"
                                                       required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" placeholder="Password" required>
                                                <small id="passwordHelpBlock" class="text text-info">
                                                    Mínimo 6 caracteres
                                                </small>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" placeholder="Confirmar Password"
                                                       required>
                                            </div>


                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="heading">
                                            <h2>Datos del <span>comercio</span></h2>
                                        </div>
                                        <div class="form-group">
                                            <input id="name" type="text"
                                                   class="form-control{{ $errors->has('nameCommerce') ? ' is-invalid' : '' }}"
                                                   name="nameCommerce" value="{{ old('nameCommerce') }}"
                                                   placeholder="Nombre del comercio"
                                                   required autofocus>
                                            <small id="passwordHelpBlock" class="text text-info">
                                                Ten en cuenta que NO podrás cambiarlo
                                            </small>


                                            @if ($errors->has('nameCommerce'))
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nameCommerce') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <select id="inputState" class="form-control" name="province_id" required>
                                                <option selected value="">Elegir provincia...</option>
                                                <option disabled>---------------------------------------------
                                                </option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing" required>
                                        <label for="customControlAutosizing"> <span
                                                    class="custom-control-description"> Acepto <a
                                                        href="{{ url('terminos') }}">Términos y condiciones</a> </span></label>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection