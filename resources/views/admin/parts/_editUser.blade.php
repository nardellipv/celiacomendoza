@extends('admin.layouts.main')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-8 ">
            <div class="block">
                <h4>Editar Usuario</h4>
                {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id],'style'=>'display:inline']) !!}
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-2 control-label">Nombre</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Apellido</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Estado</label>
                        <div class="col-md-4">
                            <label class="check"><input type="radio" class="iradio" name="status"
                                                        value="ACTIVE" {{ $user->status == 'ACTIVE' ? 'checked' : '' }} />
                                Activo</label>
                        </div>
                        <div class="col-md-4">
                            <label class="check"><input type="radio" class="iradio" name="status"
                                                        value="DESACTIVE" {{ $user->status == 'DESACTIVE' ? 'checked' : '' }} />
                                Desactivo</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-success btn-block">Actualizar</button>
                    </div>
                </form>
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