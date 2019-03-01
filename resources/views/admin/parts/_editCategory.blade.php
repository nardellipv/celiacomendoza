@extends('admin.layouts.main')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-8 ">
            <div class="block">
                <h4>Editar Categoría</h4>
                {!! Form::model($category, ['method' => 'PATCH','route' => ['categorias.update', $category->id],'style'=>'display:inline']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-2 control-label">Nombre</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success btn-block">Actualizar</button>
                </div>
                {!! Form:Close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type='text/javascript' src='{{ asset('adminStyle/js/plugins/icheck/icheck.min.js') }}'></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>

    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap-timepicker.min.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap-colorpicker.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap-file-input.js') }}"></script>
    <script type="text/javascript" src="{{ asset('adminStyle/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
@endsection