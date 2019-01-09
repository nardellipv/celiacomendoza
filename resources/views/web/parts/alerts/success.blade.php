@if (Session::has('message'))
<div class="row">
    <div class="col-md-7 col-sm-offset-4">
        <div class="add-listing-bg">
            <div class="login-msg">
                <strong><i class="fa fa-thumbs-up fa-2x"></i> ¡¡¡Perfecto!!!</strong> {!! Session::get('message') !!}
            </div>
        </div>
    </div>
</div>
@endif
