<section id="contact-us" class="p_b70 p_t70">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div class="contact-bg">
                    <div class="heading">
                        <h4>Si tienes alguna pregunta, duda o sugerencia, por favor Contactanos</h4>
                    </div>
                    {!! Form::open(['method' => 'POST','route' => ['mailclient'],'style'=>'display:inline']) !!}
                    {{ csrf_field() }}
                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                                           value="{{ old('name') }}" required/>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                           value="{{ old('email') }}" placeholder="Email" required/>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="messageCustomer" id="message"
                                              rows="4"
                                              placeholder="Mensaje"
                                              required>{{ old('messageCustomer') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Recaptcha::render() !!}
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </div>
                    {!! Form::Close() !!}
                </div>
            </div>
        </div>
    </div>
</section>