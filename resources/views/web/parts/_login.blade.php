<div class="row">
    <div class="col-sm-6 col-xs-12">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}"
              aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group">
                <label for="sender-email" class="control-label">Email:</label>

                <div class="input-icon"><i class="icon-user fa"></i>
                    <input id="email" type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="user-pass" class="control-label">Contraseña:</label>

                <div class="input-icon"><i class="icon-lock fa"></i>
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" placeholder="Contraseña" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>

            </div>


        </form>
    </div>
    <div class="col-sm-6 col-xs-12">
        <h2>Registrarte como vendedor</h2>
        <br>
        <h4>Si vendes alimentos sin Tacc o sos proveedor de productos sin gluten o solamente haces viandas para celíacos, en toda la provincia
            de Mendoza y queres llegar a más clientes, te invitamos a registrarte en nuestra web.</h4>
        <h4>Es simple, llega a todo Mendoza y lo más importante es GRATIS!!!</h4>
        <h4>Registrate y empeza a vender</h4>
        <a href="{{ url('register') }}" class="btn btn-danger btn-block">Registrate</a>
    </div>
</div>