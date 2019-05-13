@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Productos</h3>
                    <a href="{{ route('blog.create') }}" type="button" class="btn btn-default btn-rounded pull-right">Agregar Nuevo Post</a>
                </div>
                <div class="panel-body">
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Cuerpo</th>
                            <th>Status</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ str_limit($post->body, 100) }}</td>
                                <td>{{ $post->status }}</td>
                                <td>
                                   {{-- <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['blog.delete', $post->id],'style'=>'display:inline']) !!}
                                    {{Form::token() }}
                                    <button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
                                    {!! Form::Close() !!}--}}
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