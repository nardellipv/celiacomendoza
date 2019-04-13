@extends('layouts.main')

<style>
    div.g-recaptcha {
        margin: 0 auto;
        width: 304px;
        margin-bottom: 10px;
    }
</style>
@section('content')
    <div class="content">
        <section>
            <div class="container">
                @include('web.parts.alerts.success')
                @include('web.parts.alerts.error')
                <div class="contact-us-map">
                    <div class="contact-detail-everytime row">
                        <div class="col-md-6">
                            <div class="contact-item-ph">
                                <span class="fa-2x icon-send-message"></span>
                                <div class="info-contact">
                                    <h4>info@celiacosmendoza.com</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item-ph">
                                <span class="fa icon-clock-4"></span>
                                <div class="info-contact">
                                    <h4>Lunes - Viernes<br>9:00 a 20:00 </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-form-food">
                        <div class="restaurent-food-titles">
                            <h2>Contacto con CeliacosMendoza</h2>
                            <span class="title-style"></span>
                            <p>Si tienes alguna pregunta, duda o sugerencia, por favor Contactanos</p>
                        </div>
                        {!! Form::open(['method' => 'POST','route' => ['mailclient'],'style'=>'display:inline']) !!}
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-input">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nombre"
                                               value="{{ old('name') }}" required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-input">
                                        <input type="email" class="form-control" name="email" id="email"
                                               value="{{ old('email') }}" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-textarea">
                                        <textarea class="form-control" name="messageCustomer" id="message"
                                                  rows="4"
                                                  placeholder="Mensaje"
                                                  required>{{ old('messageCustomer') }}</textarea>
                                        {!! Recaptcha::render() !!}
                                        <button>Enviar</button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::Close() !!}
                        <div class="follows-us">
                            <h2>seguinos en</h2>
                            <ul class="social-icons-food">
                                <li><a href="https://www.facebook.com/celiacosmendozaOK/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection