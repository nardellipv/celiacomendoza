@extends('web.adminClient')

@section('content')
    @include('web.parts.alerts.success')

    @include('web.parts.alerts.error')
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">Información Personal</h4>

        {!! Form::model($user, ['method' => 'PATCH','route' => ['updatePerson.update', $user->id]]) !!}
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mobile">Nombre</label>
                <input type="text" class="form-control" name="name" id="name"

                       value="{{ $user->name }}" required/>
            </div>
            <div class="form-group col-md-6">
                <label for="mobile">Apellido</label>
                <input type="text" class="form-control" name="lastname"

                       id="lastname"

                       value="{{ $user->lastname }}" required/>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mobile">Email</label>
                <input type="email" class="form-control" name="email"

                       id="email"

                       value="{{ $user->email }}" required/>
            </div>
            <div class="form-group col-md-6">
                <div class="form-row">
                    <label for="mobile">Cambiar Contraseña</label>
                    <input type="password" class="form-control" name="password"

                           id="password"/>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Modificar Perfil</button>
        {!! Form::Close() !!}

        <br><br>
        <a href="{{ route('commerceAvailable', $user->id) }}" type="submit" class="btn btn-large btn-warning" style="margin-left: auto;margin-right: auto;display: block;">
            Habilitar cuenta como Comercio
        </a>
    </div>
@endsection