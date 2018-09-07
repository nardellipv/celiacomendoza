@include('web.parts.alerts.success')
@include('web.parts.alerts.error')
<!-- Google Maps
============================================= -->
<section class="google-maps pb-md pt-md">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 pr-md pl-md">
                <iframe
                        width="100%"
                        height="300px"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALYXInVytihQDVFo-eCCB1h3iq59whY0g&q={{ $commerce->address .','. $commerce->number .','. $commerce->location }}"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<!-- .google-maps end -->
<div class="main-container">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-4">
                <div class="contact_info">
                    <h5 class="list-title gray"><strong>Contacto</strong></h5>
                    <div class="contact-info ">
                        <div class="address">
                            <p class="p1">{{ $commerce->address }}</p>
                            <p class="p1">{{ $commerce->location }} </p>
                            <p>Email: {{ $commerce->user->email }}</p>
                            <p>Teléfono: {{ $commerce->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <h5 class="list-title gray"><strong>Contactenos</strong></h5>
                    {!! Form::open(['method' => 'POST','route' => ['mailcustomers']]) !!}
                    {{ csrf_field() }}
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                                               value="{{ old('name') }}"  required/>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                               value="{{ old('email') }}"  placeholder="Email" required/>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="form-group">
                                                <textarea class="form-control" name="messageCustomer" id="message" rows="4"
                                                          placeholder="Mensaje" required>{{ old('messageCustomer') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" id="submit-message" class="btn btn-primary btn-block">Enviar Mensaje
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    {!! Form::Close() !!}
                </div>
            </div>
        </div>
    </div>
</div>