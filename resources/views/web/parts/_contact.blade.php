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
                        height="500"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALYXInVytihQDVFo-eCCB1h3iq59whY0g&q={{ $commerce->address }}" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<!-- .google-maps end -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="contct-widget-content">
                    <p class="mb-0">Comunicate directo con la tienda sin intermediarios. Cuando
                        <b>{{ $commerce->name }}</b> responda llegará
                        un mail a tu casilla de correo, recuerda verificar la carpeta spam.</p>
                    <div class="widget-contact-info mt-md">
                        <div class="col-xs-12 col-sm-12 col-md-6 mb-30-xs mb-30-sm">
                            <h6>Teléfono :</h6>
                            <p><i class="fa fa-phone"></i>{{ $commerce->phone }}</p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <h6>Email :</h6>
                            <p class="mb-0"><i class="fa fa-envelope"></i>{{ $commerce->user->email }}</p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-30 mb-30-xs mb-30-sm">
                            <h6>Dirección :</h6>
                            <p class="mb-0"><i class="fa fa-map-marker"></i>{{ $commerce->address }}</p>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->

            <div class="col-xs-12 col-sm-12 col-md-8 widget-contact p-none-xs p-none-sm">
                {!! Form::open(['method' => 'POST','route' => ['mailcustomers']]) !!}
                {{ csrf_field() }}
                <div class="col-md-6">
                    <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Nombre"
                           required/>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control mb-30" name="email" id="email"
                           placeholder="Email" required/>
                </div>
                <div class="col-md-12">
                        <textarea class="form-control mb-30" name="messageCustomer" id="message" rows="4"
                                  placeholder="Mensaje" required></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" id="submit-message" class="btn btn-primary btn-block">Enviar Mensaje
                    </button>
                </div>
                {!! Form::Close() !!}
            </div>
        </div>
    </div>
</section>