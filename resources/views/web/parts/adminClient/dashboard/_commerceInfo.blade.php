@include('web.parts.alerts.success')

@include('web.parts.alerts.error')
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Información del local</h4>

    {!! Form::model($commerce, ['method' => 'PATCH','route' => ['updateCommerce.update', $commerce->id], 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}

    <div class="form-row">
        <label for="state">Nombre</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ $commerce->name }}"
               placeholder="Nombre" required readonly/>
        <div class="form-group col-md-6">
            <label for="street">Provincia</label>

            <input type="text" class="form-control"

                   id="province"

                   value="{{ $commerce->province->name }}" placeholder="Provincia" disabled/>
        </div>
        <div class="form-group col-md-6">
            <label for="state">Localidad</label>
            <div class="intro">
                <select name="region_id" class="form-control" required>
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
    </div>
    <div class="form-group">
        <label for="city">Dirección</label>
        <input type="text" class="form-control" name="address" id="address" value="{{ $commerce->address }}"
               placeholder="Dirección"/>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="city">Teléfono</label>
            <input type="text" class="form-control" name="phone" id="phone" value="{{ $commerce->phone }}"
                   placeholder="Teléfono"/>
        </div>
        <div class="form-group col-md-4">
            <label for="city">Usuario Facebook</label>
            <input type="text" pattern="[A-Za-z0-9_-]+" name="facebook" class="form-control"
                   title="Recuerda poner solo el usuario sin https:://www.facebook.com/"
                   value="{{ $commerce->facebook }}" placeholder="USUARIO">
        </div>
        <div class="form-group col-md-4">
            <label for="street">Sitio Web</label>
            <input type="text" class="form-control" name="web" id="web" value="{{ $commerce->web }}"
                   placeholder="Sitio Web"/>
        </div>
    </div>

    <label for="about-me">Cuenta al público sobre tu local y comida</label>
    <textarea class="form-control" name="about" id="about" rows="5" placeholder="Cuenta sobre tu local y comida"
              required>{{ $commerce->about }}</textarea>

    <br>

    <label for="street">Medios de pago</label>
    <br>
    @foreach($payments as $payment)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="{{ $payment->id }}" id="{{ $payment->name }}"
                   name="payment[]">
            <label class="custom-control-label" for="{{ $payment->name }}">{{ $payment->name }}</label>
        </div>
    @endforeach
    <br><br>
    <label for="street">Medios de pago Elegidos</label>
    @foreach($paymentsCommerce as $paymentCommerce)
        <img src="{{ $paymentCommerce->payment->photo }}">
        <a href="{{ route('deletePayment', [$paymentCommerce->payment_id, $paymentCommerce->commerce_id]) }}">
            <img src="{{ asset('webStyle/img/cross.png') }}">
        </a>
    @endforeach

    <br>
    <hr>
    <label for="street">Servicios</label>
    <br>
    @foreach($characteristics as $characteristic)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" value="{{ $characteristic->id }}"
                   id="{{ $characteristic->name }}" name="services[]"/>
            <label class="custom-control-label" for="{{ $characteristic->name }}">{{ $characteristic->name }}</label>
        </div>
    @endforeach
    <label for="street">Caracteristicas Elegidas</label>

    @foreach($characteristicsCommerce as $characteristicCommerce)


        <img src="{{ $characteristicCommerce->characteristic->photo }}">

        <a href="{{ route('deleteService', [$characteristicCommerce->characteristic_id, $characteristicCommerce->commerce_id]) }}">

            <img src="{{ asset('webStyle/img/cross.png') }}">

        </a>


    @endforeach

    <hr>

    <div class="form-row">
        <div class="form-group col-md-6">
            <input id="input-upload-img1" name="file" type="file" class="file">


            <small id="" class="form-text text-muted">

                La imagen no debe superar los 2MB. Formatos admitidos jpg, png, gif

            </small>
        </div>
        <div class="form-group col-md-6">
            <label>Logo del Local</label>
            @if($commerce->logo)

                <img src="{{ asset('images/thumbnail/logo/'.($commerce->logo)) }}">

            @endif
        </div>
        <br>

        <button type="submit" class="btn btn-primary">Modificar Datos del Comercio</button>

        {!! Form::Close() !!}
    </div>
</div>