@extends('layouts.company')

@section('title',' ⚠ ' . $commerce->name . ' local para celiacos')
@section('meta-description','💪 Local de comida sin TACC '.$commerce->name .' ubicado en '.$commerce->region->name .' ingresa y conoce más sobre este local')

@section('contentAbout')
    @include('web.parts._dataCommerce')
@endsection
@section('content')
    @include('web.parts._aboutCommerce')
    @include('web.parts._shop')
    @include('web.parts._characteristicCommerce')
    @include('web.parts._social')
@endsection