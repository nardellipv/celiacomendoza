@extends('layouts.main')

@section('content')
    <div class="content">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" aria-controls="reset" role="tab"
                                                                      data-toggle="tab">Pedir nueva contraseña</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="reset">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="login-register-bg">
                                <div class="row">
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="heading">
                                            <h2>Resetear contraseña</h2>
                                        </div>
                                        <form method="POST" action="{{ route('password.email') }}"
                                              aria-label="{{ __('Reset Password') }}">
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
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Resetear Contraseña') }}
                                                </button>
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
        </div>
    </div>
@endsection
