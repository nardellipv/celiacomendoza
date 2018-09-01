@if (Session::has('message'))
    <div class="alerts alert-info text-center" style="background-color: yellow;">
        <div class="alert-content">
            <div class="alert-icon">
                <i class="fa fa-check-circle"></i>
            </div>
            <h4>Compra Realizada con éxito</h4>
            <p>{!! Session::get('message') !!}</p>
        </div>
    </div>
@endif

