<div id="contactClient" class="page-bottom-info">
    <div class="page-bottom-info-inner">

        <div class="page-bottom-info-content text-center">
            <h1>Si tienes alguna pregunta, duda o sugerencia, por favor contactanos.</h1>
            {!! Form::open(['method' => 'POST','route' => ['mailclient'],'style'=>'display:inline']) !!}
            {{ csrf_field() }}
            <fieldset>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                                   value="{{ old('name') }}" required/>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   value="{{ old('email') }}" placeholder="Email" required/>
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <div class="form-group">
                                                <textarea class="form-control" name="messageCustomer" id="message"
                                                          rows="4"
                                                          placeholder="Mensaje"
                                                          required>{{ old('messageCustomer') }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="submit-message" class="btn btn-primary btn-block">Enviar Mensaje
                            </button>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="col-xs-12  col-sm-12  col-md-12 mt-xs">
            </div>
            {!! Form::Close() !!}
        </div>

    </div>
</div>