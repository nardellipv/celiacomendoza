@extends('admin.layouts.main')

@section('content')
    @include('admin.parts._widget')
    @include('admin.parts._listUsers')
    @include('admin.parts._listProduct')
@endsection

@section('script')
    <script type='text/javascript' src='{{ asset('adminStyle/js/plugins/icheck/icheck.min.js') }}'></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection