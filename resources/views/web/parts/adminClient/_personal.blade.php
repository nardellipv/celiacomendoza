<style>

    input[type=checkbox].css-checkbox {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        height: 1px;
        width: 1px;
        margin: -1px;
        padding: 0;
        border: 0;
    }

    .elegant {
        background-image: url(http://csscheckbox.com/checkboxes/elegant.png);
    }

    input[type=checkbox].css-checkbox.med + label.css-label.med {
        padding-left: 22px;
        height: 17px;
        display: inline-block;
        line-height: 17px;
        background-repeat: no-repeat;
        background-position: 0 0;
        font-size: 15px;
        vertical-align: middle;
        cursor: pointer;
    }

    input[type=checkbox].css-checkbox.med:checked + label.css-label.med {

        background-position: 0 -17px;
    }
</style>
<section id="profile" class="p_b70 p_t70 bg_lightgry">
    @include('web.parts.alerts.success')
    @include('web.parts.alerts.error')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                @include('web.parts.adminClient._aside')
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="profile-login-bg">
                    <h2><span><i class="fa fa-user"></i></span> Información <span>Personal</span></h2>

                    {!! Form::model($user, ['method' => 'PATCH','route' => ['updatePerson.update', $user->id]]) !!}
                    {{ csrf_field() }}
                    <div class="row p_b30">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="{{ $user->name }}" required/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="name">Apellido</label>
                                <input type="text" class="form-control" name="lastname"
                                       id="lastname"
                                       value="{{ $user->lastname }}" required/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"
                                       id="email"
                                       value="{{ $user->email }}" required/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="mobile">Cambiar Contraseña</label>
                                <input type="password" class="form-control" name="password"
                                       id="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-large btn-default" id="submit">Actualizar Información
                            Personal
                        </button>
                    </div>
                    {!! form::close() !!}


                    <h2><span><i class="fa fa-building"></i></span> Información del <span>Local</span></h2>

                    {!! Form::model($commerce, ['method' => 'PATCH','route' => ['updateCommerce.update', $commerce->id], 'enctype' => 'multipart/form-data']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="state">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ $commerce->name }}" placeholder="Nombre"
                               required readonly/>
                    </div>
                    <div class="form-group">
                        <label for="city">Dirección</label>
                        <input type="text" class="form-control" name="address"
                               id="address"
                               value="{{ $commerce->address }}" placeholder="Dirección"/>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="city">Localidad</label>
                                <select id="inputState" class="form-control" name="region_id" required>
                                    @if($commerce->region_id)
                                        <option selected
                                                value="{{ $commerce->region_id }}">{{ $commerce->region->name }}</option>
                                    @else
                                        <option selected value="">Elegir región...</option>
                                    @endif
                                    <option disabled>---------------------------------------------</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="street">Teléfono</label>
                                <input type="text" class="form-control" name="phone"
                                       id="phone"
                                       value="{{ $commerce->phone }}" placeholder="Teléfono"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="city">Usuario Facebook</label>
                                <input type="text" pattern="[A-Za-z0-9_-]+" name="facebook" class="form-control"
                                       title="Recuerda poner solo el usuario sin https:://www.facebook.com/"
                                       value="{{ $commerce->facebook }}" placeholder="USUARIO">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="street">Sitio Web</label>
                                <input type="text" class="form-control" name="web" id="web"
                                       value="{{ $commerce->web }}" placeholder="Sitio Web"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="about-me">Cuenta al público sobre tu local y comida</label>
                        <div class="form-group">
                            <textarea class="form-control" name="about" id="about"
                                      rows="5" placeholder="Cuenta sobre tu local y comida"
                                      required>{{ $commerce->about }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street">Medios de pago</label>
                        <div class="row">
                            @foreach($payments as $payment)
                                <div class="col-md-3">
                                    <div class="inputGroup">
                                        <input type="checkbox" id="{{ $payment->name }}" name="payment[]"
                                               value="{{ $payment->id }}" class="css-checkbox med"/>
                                        <label for="{{ $payment->name }}" name="payment"
                                               class="css-label med elegant">{{ $payment->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street">Medios de pago Elegidos</label>
                        <div class="row">
                            @foreach($paymentsCommerce as $paymentCommerce)
                                <div class="col-md-3" style="width: auto">
                                    <img src="{{ $paymentCommerce->payment->photo }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street">Servicios</label>
                        <div class="row">
                            @foreach($characteristics as $characteristic)
                                <div class="col-md-3">
                                    <div class="inputGroup">
                                        <input type="checkbox" id="{{ $characteristic->name }}" class="css-checkbox med"
                                               value="{{ $characteristic->id }}" name="services[]"/>
                                        <label for="{{ $characteristic->name }}" name="{{ $characteristic->name }}"
                                               class="css-label med elegant">{{ $characteristic->name }}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street">Caracteristicas Elegidas</label>
                        <div class="row">
                            @foreach($characteristicsCommerce as $characteristicCommerce)
                                <div class="col-md-3" style="width: auto">
                                    <img src="{{ $characteristicCommerce->characteristic->photo }}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="about-me">Logo</label>
                        <div class="form-group">
                            <div class="col-lg-12" style="width: 13%;margin-right: 30%;">
                                <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}">
                                <div class="mb10">
                                    <input id="input-upload-img1" name="file" type="file" class="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-large btn-default" id="submit">Actualizar Local</button>
                    </div>
                    {!! form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>