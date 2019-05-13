@if (Session::has('message'))
    <div class="dorchester-grill-section">
        <div class="views-locate text-center" style="background-color: #ffbb00;">
            <strong>¡¡¡Perfecto!!!</strong> {!! Session::get('message') !!}
        </div>
    </div>
@endif
