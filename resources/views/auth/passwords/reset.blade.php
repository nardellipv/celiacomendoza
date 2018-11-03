@extends('layouts.login')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box">
                    <div class="card card-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">
                                <!-- Original Logo will be placed here  -->
                                <span class="logo-icon">
                                    <img src="{{ asset('webStyle/img/img-logo.png') }}" alt="logo" width="25%">
                                </span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Email:</label>

                                    <div class="input-icon"><i class="icon-user fa"></i>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                               placeholder="Email" value="{{ $email ?? old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Contraseña:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               placeholder="contraseña" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Confirmar Contraseña:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                        <input id="password-confirm" type="password" class="form-control"
                                               placeholder="confirmar contraseña" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        {{ __('Resetear mi contraseña') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <p class="text-center "><a href="{{ url('login') }}"> Volver al login </a></p>

                            <div style=" clear:both"></div>
                        </div>
                    </div>
                    <div class="login-box-btm text-center">
                        <p> ¿No tienes una cuenta? <br>
                            <a href="{{ url('register') }}"><strong>Registrarse!</strong> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
