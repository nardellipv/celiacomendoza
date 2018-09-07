@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show text text-center" role="alert">
        <strong><i class="fa fa-thumbs-down fa-2x"></i> Revise los siguientes datos por favor</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif