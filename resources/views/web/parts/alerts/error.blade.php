@if (count($errors) > 0)
    <div class="dorchester-grill-section">
        <div class="views-locate text-center" style="background-color: #ffbb00;">
            <div class="col-md-12 directory-category-heading">
                <h4>Revise los siguientes <span>Errores</span></h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><i class="fa fa-ban"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif