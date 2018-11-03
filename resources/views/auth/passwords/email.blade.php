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
                                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <img src="{{ asset('webStyle/img/img-logo.png') }}" alt="logo" width="25%">
                                </span>
                            </h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}"
                                  aria-label="{{ __('Reset Password') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Email:</label>

                                    <div class="input-icon"><i class="icon-user fa"></i>
                                        <input id="email" type="email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ old('email') }}" placeholder="Email" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        {{ __('Enviar mi contraseña') }}
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
