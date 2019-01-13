@if (Session::has('message'))
<div class="row">
    <div class="col-md-7">
        <div class="add-listing-bg">
            <div class="login-msg">
                <strong> {!! Session::get('message') !!}
            </div>
        </div>
    </div>
</div>
@endif