@extends('layouts.main')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Crea una cuenta, es GRATIS!!!</h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                    @csrf
                                    <fieldset>
                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Nombre <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name" value="{{ old('name') }}" placeholder="Nombre"
                                                       required autofocus>
                                                <small id="passwordHelpBlock" class="form-text text-muted">
                                                    No será público
                                                </small>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Apellido <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                       name="lastname" value="{{ old('lastname') }}"
                                                       placeholder="Apellido" required autofocus>
                                                <small id="passwordHelpBlock" class="form-text text-muted">
                                                    No será público
                                                </small>

                                                @if ($errors->has('lastname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lastname') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group  row required">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
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
                                        </div>
                                        <div class="form-group  row required">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" placeholder="Password" required>
                                                <small id="passwordHelpBlock" class="form-text text-muted">
                                                    Mínimo 6 caracteres
                                                </small>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group  row required">
                                            <label for="inputPassword3" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" placeholder="Confirmar Password"
                                                       required>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Nombre del Comercio
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('nameCommerce') ? ' is-invalid' : '' }}"
                                                       name="nameCommerce" value="{{ old('nameCommerce') }}"
                                                       placeholder="Nombre del comercio"
                                                       required autofocus>
                                                <small id="passwordHelpBlock" class="form-text text-muted">
                                                    Ten en cuenta que NO podrás cambiarlo
                                                </small>


                                                @if ($errors->has('nameCommerce'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('nameCommerce') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Lugar del negocio
                                                <sup>*</sup></label>
                                            <div class="col-sm-6">
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


                                        <div class="form-group row">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <div class="col-auto my-1 no-padding">
                                                        <div class="custom-control custom-checkbox mr-sm-2">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customControlAutosizing" required>
                                                            <label class="custom-control-label"
                                                                   for="customControlAutosizing"> <span
                                                                        class="custom-control-description"> Leí y estoy de acuerdo con los <a
                                                                            href="{{ url('terminos') }}">Términos y condiciones</a> </span></label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div style="clear:both"></div>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Registrarse') }}
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class="icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Publica productos gratuitamente</strong></h3>

                            <p> Publica todos los productos que vendas gratuitamente. Llega a muchas
                                más personas sin pagar.</p>
                        </div>
                        <div class="promo-text-box"><i class="icon-basket-1 ln-shadow shape-8"></i>

                            <h3><strong>Vender con o sin local</strong></h3>

                            <p>Muestra tu local a toda la gente celíaca de Mendoza, si eres un vendedor sin local no
                                importa
                                puedes mostrar solo tus productos para que te conozcan más personas.</p>
                        </div>
                        <div class="promo-text-box"><i class="icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Lo que nos importa</strong></h3>

                            <p>Queremos reunir a la mayoría de locales y vendedores particulares de comida para celiacos
                                de Mendoza,
                                para que sea mucho mas fácil encontrar variedad y precios, como también poder aumentar
                                las ventas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
@endsection
