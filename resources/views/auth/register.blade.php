@extends('layouts.main')

@section('content')
    {{ Cookie::queue('register', 'sin_registro', '2628000') }}
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

                                    <h2>Ingresar nuevo usuario</h2>

                                </div>

                                <div class="form-input">
                                    <small id="passwordHelpBlock" class="text text-info">

                                        Sus datos no serán publicado

                                    </small>

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
                                    <small id="passwordHelpBlock" class="text text-info">

                                        Si es usuario final ingrese su nombre y apellido

                                    </small>

                                    <input id="name" type="text"

                                           class="form-control{{ $errors->has('nameCommerce') ? ' is-invalid' : '' }}"

                                           name="nameCommerce" value="{{ old('nameCommerce') }}"

                                           placeholder="Nombre del comercio"

                                           required autofocus>


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
                                <br><br>
                                <small id="passwordHelpBlock" class="text text-info">
                                    ¿Qué tipo de usuario eres?
                                </small>
                                <div class="food-religion">
                                    <label>
                                        <input type="radio" name="type" value="OWNER" required/>
                                        <i class="icon-food"></i>
                                        <small>Comercio Celíaco</small>
                                    </label>
                                    <label>
                                        <input type="radio" name="type" value="CLIENT"/>
                                        <i class="icon-user"></i>
                                        <small>Usuario Final</small>
                                    </label>
                                </div>

                                <div class="checkbox-service">

                                    <label>

                                        <input type="checkbox"

                                               id="customControlAutosizing" required>

                                        <span></span>

                                        <small>Acepto <a href="{{ url('terminos') }}">Términos y
                                                condiciones</a></small>

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
@endsection
