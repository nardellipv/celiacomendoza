@if (Session::has('message'))    <div class="card text-center">        <div class="card-header">            <strong>¡¡¡Perfecto!!!</strong> {!! Session::get('message') !!}</p>        </div>    </div>@endif