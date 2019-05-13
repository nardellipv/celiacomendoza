@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Productos</h3>
                    <a href="" type="button" class="btn btn-default btn-rounded pull-right">Agregar Nueva Categoría</a>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('categorias.edit', $category->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['categorias.destroy', $category->id],'style'=>'display:inline']) !!}
                                    {{Form::token() }}
                                    <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::Close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type='text/javascript' src='{{ asset('adminStyle/js/plugins/icheck/icheck.min.js') }}'></script>
    <script type="text/javascript"
            src="{{ asset('adminStyle/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
@endsection