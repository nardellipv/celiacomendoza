@if (Auth::guest())
    <section id="call-to-action"
             style="background-image: url(webStyle/img/fondoLogin.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="call-to-action">

                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h2>Iniciar Sesión</h2>
                                <form method="POST" action="{{ route('login') }}"
                                      aria-label="{{ __('Login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-icon"><i class="icon-user fa"></i>
                                            <input id="email" type="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ old('email') }}" placeholder="Email" required
                                                   autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">

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

                                    <div class="row">
                                        <div class="col-sm-8 col-xs-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-xs-12">
                                            <p class="text-center pull-right">
                                                <a href="{{ route('password.request') }}">
                                                    {{ __('¿Olvidé mi contraseña?') }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <h2>Registrarte como vendedor</h2>
                                <br>
                                <h5>Si vendes alimentos <b>sin tacc</b> o sos proveedor de productos <b>sin gluten</b> o
                                    solamente
                                    haces viandas para celíacos, en toda la provincia de Mendoza y queres llegar a más
                                    clientes, te invitamos a registrarte en nuestra
                                    web.</h5>
                                <h5>Es simple, llega a todo Mendoza y lo más importante es GRATIS!!!</h5>
                                <h4>Registrate y empeza a vender</h4><br>
                                <a href="{{ url('login') }}" class="btn btn-danger btn-block">Registrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<section id="counter-section" style="padding: 50px 0px 0px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading">
                <h2>¿Qué es la enfermedad celíaca?</h2>
                <br>
                <p>La enfermedad celíaca es un trastorno autoinmune grave que puede ocurrir en personas genéticamente
                    predispuestas
                    en las que la ingestión de gluten provoca daños en el intestino delgado. Se estima que afecta a 1 de
                    cada 100
                    personas en todo el mundo. alrededor de 400 mil personas pueden ser celíacas y cada vez son más a
                    quienes llegan al diagnóstico.</p>
                <br>
                <p>La enfermedad celíaca afecta a cada persona de manera diferente. Los síntomas pueden ocurrir en el
                    sistema digestivo o en otras partes del cuerpo. Una persona puede tener diarrea y dolor abdominal,
                    mientras que otra puede estar irritable o deprimida. La irritabilidad es uno de los síntomas más
                    comunes en los niños. Algunas personas no tienen síntomas y de no ser diagnosticados pueden tener
                    complicaciones de salud a largo plazo.</p>
            </div>
        </div>
    </div>
</section>