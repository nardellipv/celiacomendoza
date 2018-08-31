@if (Session::has('message'))
    <div class="alerts alert-info" style="margin-bottom: 16px;">
        <div class="alert-icon">
            <i class="fa fa-check-circle"></i>
        </div>
        <div class="alert-content">
            <h4>{!! Session::get('message') !!}</h4>
            <p>Corrobore en el carrito los productos.</p>
        </div>
    </div>
@endif