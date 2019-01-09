<div class="right-bar bg_white">
    <h4>Dirección <span>Vendedor</span></h4>
    <div id="cd-google-map">
        <iframe
                width="100%"
                {{--height="300px"--}}
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALYXInVytihQDVFo-eCCB1h3iq59whY0g&q={{ $commerce->address .','. $commerce->location }}, Mendoza"
                allowfullscreen>
        </iframe>
        @if($commerce->region)
        <p><i class="fa fa-map-o" aria-hidden="true"></i> {{ $commerce->region->name }}</p>
        @endif
        @if($commerce->address)
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $commerce->address }}</p>
        @endif
        @if($commerce->phone)
            <p><i class="fa fa-phone" aria-hidden="true"></i> {{ $commerce->phone }}</p>
        @endif
        @if($commerce->web)
            <p><i class="fa fa-globe" aria-hidden="true"></i> <a href="#">{{ $commerce->web }}</a></p>
        @endif
    </div>
</div>

<div class="right-bar bg_white">
    <h4>Contacto <span>Rápido</span></h4>
    {!! Form::open(['method' => 'POST','route' => ['mailcustomers', $commerce->id]]) !!}
    {{ csrf_field() }}
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}" name="name" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" name="email" required>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="messageCustomer" placeholder="Mensaje"
                  required>{{ old('messageCustomer') }}</textarea>
    </div>
    <div class="form-group">
        {!! Recaptcha::render() !!}
    </div>
    <div class="form-group">
        <button type="submit">enviar</button>
    </div>
    {!! Form::Close() !!}
</div>