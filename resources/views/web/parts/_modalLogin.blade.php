<section id="signIn" class="sign">
    <div class="container">
        <div class="row">
            <div class="col-xs-12  col-sm-12  col-md-12">
                <div class="text-center">
                    <button type="button" class="btn btn-primary text-center" data-toggle="modal"
                            data-target=".login-modal-lg">sign in button
                    </button>
                </div>
                <div class="modal model-sign fade login-modal-lg" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 sign-icon">
                                        <i class="icon icon-OpenedLock"></i>
                                        <h5>Ingresar</h5>
                                    </div>
                                    <div class="col-md-8 sign-form">
                                        <form method="POST" action="{{ route('login') }}"
                                              aria-label="{{ __('Login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="username">EMail</label>
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Contraseña</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="checkbox">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Recordarme') }}
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                                        </form>
                                        <div class="form-links">
                                            <a href="#">Crear una nueva cuenta</a>
                                            /
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidá mi contraseña?') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>