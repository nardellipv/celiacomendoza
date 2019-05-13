@extends('web.adminClient')
@section('content')
    <section id="profile" class="p_b70 p_t70 bg_lightgry">
        @include('web.parts.alerts.success')
        @include('web.parts.alerts.error')
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    @include('web.parts.adminClient._aside')
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="profile-login-bg">
                        <h2><span><i class="fa fa-check-square-o"></i></span> Editar <span>Producto</span></h2>
                        {!! Form::model($product, ['method' => 'PATCH','route' => ['product.update', $product->id],'style'=>'display:inline','enctype' => 'multipart/form-data']) !!}
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Crear un nuevo Producto </label>
                            <input type="text" name="name" class="form-control" value="{{ $product->name }}"
                                   placeholder="Nombre del producto" required>
                        </div>

                        <div class="form-group">
                            <label>Descripción</label>
                            <textarea class="form-control" name="description"
                                      placeholder="Descripción del producto"
                                      required>{{ $product->description }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Categoría</label>
                                    <div class="intro">
                                        <select name="category_id" required>
                                            <option value="{{ $product->category_id }}"> {{ $product->category->name }}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Precio </label>
                                    <input type="text" name="price" class="form-control" value="{{ $product->price }}"
                                           placeholder="Precio" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>¿Activar Producto?</label>
                                    <input class="form-check-input" type="radio" name="available"
                                           id="inlineRadio1"
                                           value="YES" {{ $product->available == 'YES' ? 'checked' : '' }}>Si
                                    <input class="form-check-input" type="radio" name="available"
                                           id="inlineRadio2"
                                           value="NO" {{ $product->available == 'NO' ? 'checked' : '' }}>No
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label>Imagen del Producto</label>
                                    <img src="{{ asset('images/thumbnail/products/'.($product->photo)) }}">
                                    <input id="input-upload-img1" name="file" type="file" class="file"
                                           data-preview-file-type="text">

                                    <small id="" class="form-text text-muted">
                                        La imagen no debe superar los 2MB. Formatos admitidos jpg, png, gif
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit">Editar Producto</button>
                        </div>

                        {!! Form::Close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection