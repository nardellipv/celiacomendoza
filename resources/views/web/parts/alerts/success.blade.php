@if (Session::has('message'))
    <div class="alerts alert-info">
        <div class="alert-icon">
            <i class="fa fa-check-circle"></i>
        </div>
        <div class="alert-content">
            <h4>Mensaje Enviado</h4>
            <p>{!! Session::get('message') !!}</p>
        </div>
    </div>
@endif
