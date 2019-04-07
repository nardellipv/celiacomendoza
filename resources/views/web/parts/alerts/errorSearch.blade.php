@if (Session::has('messageSearch'))
<div class="row">
    <div class="col-md-7 col-sm-offset-4">
        <div class="add-listing-bg">
            <div class="login-msg">
                <h3>{!! Session::get('messageSearch') !!}</h3>
            </div>
        </div>
    </div>
</div>
@endif