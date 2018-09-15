@if (Session::has('messageCheckout'))
<div class="alert alert-warning alert-dismissible fade show text text-center" role="alert">
    <strong><i class="fa fa-thumbs-up fa-2x"></i> Compra Realizada con éxito</strong> {!! Session::get('messageCheckout') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

