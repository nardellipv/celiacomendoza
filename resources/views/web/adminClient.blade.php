@extends('layouts.adminClient')

@section('content')
    @if (Request::is('cliente-perfil'))
        @include('web.parts.adminClient._personal')
    @endif

    @if (Request::is('cliente-perfil/activos'))
        @include('web.parts.adminClient._productsAvailable')
    @endif

    @if (Request::is('cliente-perfil/desactivos'))
        @include('web.parts.adminClient._productsDisable')
    @endif
@endsection
