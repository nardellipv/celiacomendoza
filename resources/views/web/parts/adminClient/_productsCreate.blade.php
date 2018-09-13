@extends('web.adminClient')
@section('content')
    <div class="main-container">
        <div class="container">
            @include('web.parts.alerts.success')
            @include('web.parts.alerts.error')
            <div class="row">
                <div class="col-md-3 page-sidebar">
                    @include('web.parts.adminClient._aside')
                </div>

                <div class="col-md-9 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Crear un nuevo
                                Producto</strong></h2>

                        <div class="row">
                            <div class="col-sm-12">

                                {!! Form::open(['method' => 'POST','route' => ['product.store'],'style'=>'display:inline','enctype' => 'multipart/form-data']) !!}
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name"
                                               value="{{ old('name') }}"
                                               id="Adtitle" placeholder="Nombre del producto">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Descripción</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" rows="3" placeholder="Descripción el producto">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Precio</label>

                                    <div class="input-group col-sm-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" name="price"
                                               value="{{ old('price') }}"
                                               aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Precio Rebaja</label>

                                    <div class="input-group col-sm-6">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" name="offer"
                                               value="{{ old('offer') }}"
                                               aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <small id="" class="form-text text-muted">
                                        ¿El producto tiene una rebaja?
                                    </small>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Categoría</label>
                                    <div class="col-sm-8">
                                        <select name="category_id" id="category-group" class="form-control" required>
                                            <option value="" selected="selected"> Seleccione una categoría...
                                            </option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">¿Producto en Oferta?</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="in_offer"
                                                       id="inlineRadio1" value="YES"> Si
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="in_offer"
                                                       id="inlineRadio2" value="NO"> No
                                            </label>
                                        </div>
                                        <small id="" class="form-text text-muted">
                                            Aparecerá en la pagina principal de la tienda
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">¿Producto en Destacado?</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="highlight"
                                                       id="inlineRadio1" value="YES"> Si
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="highlight"
                                                       id="inlineRadio2" value="NO"> No
                                            </label>
                                        </div>
                                        <small id="" class="form-text text-muted">
                                            Aparecerá en la pagina principal de la tienda
                                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label">¿Activar Producto?</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="available"
                                                       id="inlineRadio1" value="YES"> Si
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="radio" name="available"
                                                       id="inlineRadio2" value="NO"> No
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="textarea">Imagen del
                                        Producto</label>
                                    <div class="col-lg-8">
                                        <div class="mb10">
                                            <input id="input-upload-img1" name="file" type="file" class="file"
                                                   data-preview-file-type="text">
                                        </div>
                                        <small id="" class="form-text text-muted">
                                            La imagen no debe superar los 2MB. Formatos admitidos jpg, png, gif
                                        </small>
                                    </div>
                                </div>

                                <!-- Button  -->
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button href="posting-success.html" id="button1id"
                                                class="btn btn-success btn-block">Crear Producto
                                        </button>
                                    </div>
                                </div>
                                {{ Form::Close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- include jquery file upload plugin  -->
    <script src="{{ asset('webStyle/assets/js/fileinput.min.js') }}" type="text/javascript"></script>
    <script>
        // initialize with defaults
        $("#input-upload-img1").fileinput();
    </script>
@endsection