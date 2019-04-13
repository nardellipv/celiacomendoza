@extends('layouts.main')

@section('content')
    <div class="content">
        <section>
            <div class="container">
                <div class="row">
                    @include('web.parts.alerts.success')
                    @include('web.parts.alerts.error')
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
        </section>

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
                                            <div class="form-input">
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
                                            <div class="form-input">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" placeholder="Contraseña" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-input">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Ingresar') }}
                                                </button>
                                            </div>
                                            <div class="checkbox-service">
                                                <label>
                                                    <input type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span></span>
                                                    <small>Recordarme</small>
                                                    <small>|</small>
                                                    <a href="{{ route('password.request') }}">
                                                        <small>¿Olvidá mi contraseña?</small>
                                                    </a>
                                                </label>
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
                                            <p><b>Registrate y empeza a vender</b></p>
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
                                    <form method="POST" action="{{ route('register') }}"
                                          aria-label="{{ __('Register') }}">
                                        @csrf
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <div class="heading">
                                                <h2>Ingresar</h2>
                                            </div>
                                            <div class="form-input">
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

                                            <div class="form-input">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                       name="lastname" value="{{ old('lastname') }}"
                                                       placeholder="Apellido" required autofocus>

                                                @if ($errors->has('lastname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="form-input">
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
                                            <div class="form-input">
                                                <small id="passwordHelpBlock" class="text text-info">
                                                    Mínimo 6 caracteres
                                                </small>
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" placeholder="Password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-input">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" placeholder="Confirmar Password"
                                                       required>
                                            </div>


                                        </div>

                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <div class="heading">
                                                <h2>Datos del comercio</h2>
                                            </div>
                                            <div class="form-input">
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

                                            <div class="form-input">
                                                <select id="inputState" class="form-control" name="province_id"
                                                        required>
                                                    <option selected value="">Elegir provincia...</option>
                                                    <option disabled>---------------------------------------------
                                                    </option>
                                                    @foreach($provinces as $province)
                                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="checkbox-service">
                                                <label>
                                                    <input type="checkbox"
                                                           id="customControlAutosizing" required>
                                                    <span></span>
                                                    <small>Acepto <a href="{{ url('terminos') }}">Términos y condiciones</a></small>
                                                </label>
                                                <button type="submit" class="btn btn-danger btn-block">
                                                    {{ __('Registrarse') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection