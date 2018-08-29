@if (count($errors) > 0)
    <div class="alerts alert-danger">
        <div class="alert-icon">
            <i class="fa fa-times"></i>
        </div>
        <div class="alert-content">
            <h4>Revise los siguientes datos por favor</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif