@extends('layouts.company')

@section('contentAbout')
    @include('web.parts._dataCommerce')
@endsection
@section('content')
    @include('web.parts._aboutCommerce')
    @include('web.parts._shop')
    @include('web.parts._characteristicCommerce')
    @include('web.parts._social')
@endsection