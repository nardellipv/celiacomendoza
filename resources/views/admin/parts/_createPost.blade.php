@extends('admin.layouts.main')

@section('content')

    <div class="content">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Ingresar entrada</h5>
            </div>

            <div class="panel-body">
                {!! Form::open(['method' => 'POST','route' => ['blog.store'],'style'=>'display:inline','enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Título:</label>
                    <input type="text" name="title" class="form-control" >
                </div>
                <div class="form-group">
                    <label class="display-block">Adjuntar imagen:</label>
                    <input type="file" name="photo" class="file-styled">
                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                </div>
                <div class="content-group">
                    <label class="display-block">Noticia:</label>
                    <textarea name="body" id="body" rows="4" cols="4"></textarea>
                </div>
                <br>
                <div class="col-md-4">
                    <button class="btn btn-success btn-block">Crear Post</button>
                </div>
                {!! Form::Close() !!}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection