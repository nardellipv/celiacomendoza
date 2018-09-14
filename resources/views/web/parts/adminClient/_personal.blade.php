<div class="main-container">
    <div class="container">
        @include('web.parts.alerts.success')
        @include('web.parts.alerts.error')
        <div class="row">
            <div class="col-md-3 page-sidebar">
                @include('web.parts.adminClient._aside')
            </div>

            <div class="col-md-9 page-content">
                <div class="inner-box">
                    <div class="welcome-msg">
                        <h3 class="page-sub-header2 clearfix no-padding">Panel de Control </h3>
                    </div>
                    <div id="accordion" class="panel-group">
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a href="#collapseB1" aria-expanded="true" data-toggle="collapse">
                                        Información Personal
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseB1">
                                <div class="card-body">
                                    {!! Form::model($user, ['method' => 'PATCH','route' => ['updatePerson.update', $user->id]]) !!}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="{{ $user->name }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Apellido</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="lastname"
                                                   id="lastname"
                                                   value="{{ $user->lastname }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Email</label>

                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email"
                                                   id="email"
                                                   value="{{ $user->email }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Contraseña</label>

                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password"
                                                   id="password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-default">Actualizar</button>
                                        </div>
                                    </div>
                                    {!! form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a href="#collapseB2" aria-expanded="true" data-toggle="collapse">
                                        Información del local
                                    </a>
                                </h4>
                            </div>
                            <div class="panel-collapse collapse" id="collapseB2">
                                <div class="card-body">
                                    {!! Form::model($commerce, ['method' => 'PATCH','route' => ['updateCommerce.update', $commerce->id], 'enctype' => 'multipart/form-data']) !!}
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" id="name"
                                                   value="{{ $commerce->name }}" placeholder="Nombre"
                                                   required readonly/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Dirección</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="address"
                                                   id="address"
                                                   value="{{ $commerce->address }}" placeholder="Dirección"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Región</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" class="form-control" name="region_id" required>
                                                @if($commerce->region_id)
                                                <option selected value="{{ $commerce->region_id }}">{{ $commerce->region->name }}</option>
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
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Teléfono</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="phone"
                                                   id="phone"
                                                   value="{{ $commerce->phone }}" placeholder="Teléfono"
                                            />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Sitio Web</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="web" id="web"
                                                   value="{{ $commerce->web }}" placeholder="Sitio Web"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Usuario Facebook</label>

                                        <div class="input-group col-sm-9">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">https://www.facebook.com/</span>
                                            </div>
                                            <input type="text" name="facebook" class="form-control"
                                                   value="{{ $commerce->facebook }}" placeholder="USUARIO">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Usuario Twitter</label>
                                            <div class="input-group col-sm-9">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">https://twitter.com/</span>
                                                </div>
                                                <input type="text" name="twitter" class="form-control"
                                                       value="{{ $commerce->twitter }}" placeholder="USUARIO">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Cuenta al público sobre tu local y
                                                comida</label>

                                            <div class="col-sm-9">
                                                    <textarea class="form-control" name="about" id="about"
                                                              rows="5" placeholder="Cuenta sobre tu local y comida"
                                                              required>{{ $commerce->about }}</textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" for="textarea">Logo del local</label>
                                            <div class="col-lg-8">
                                                <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}">
                                                <div class="mb10">
                                                    <input id="input-upload-img1" name="file" type="file" class="file">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-default">Actualizar</button>
                                            </div>
                                        </div>
                                        {!! Form::Close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('script')
    <!-- include jquery file upload plugin  -->
        <script src="{{ asset('webStyle/assets/js/fileinput.min.js') }}" type="text/javascript"></script>
        <script>
            // initialize with defaults
            $("#input-upload-img1").fileinput();
        </script>
@endsection