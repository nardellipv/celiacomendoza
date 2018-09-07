@if (Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show text text-center" role="alert">
        <strong><i class="fa fa-thumbs-up fa-2x"></i> ¡¡¡Perfecto!!!</strong> {!! Session::get('message') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
