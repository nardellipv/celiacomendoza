@extends('layouts.login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="call-to-action">
                    {!! Form::open(['method' => 'POST','route' => ['searchAble']]) !!}
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single-query form-group">
                                    <input type="text" name="search" class="keyword-input" placeholder="Ingrese el producto a buscar...">
                                </div>
                            </div>
                            <div class="col-sm-7 left-block">
                                <div class="search-btn">
                                    <button>Buscar <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    {!! Form::Close() !!}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <table class="table datatable">
                                <thead>
                                <tr style="color: aqua">
                                    <th style="text-align: center">Marca</th>
                                    <th style="text-align: center">Nombre Comercial</th>
                                    <th style="text-align: center">Denominación Venta</th>
                                    <th style="text-align: center">RNPA</th>
                                </tr>
                                </thead>
                                <tbody style="color: azure">
                                @foreach($search as $value)
                                    <tr>
                                        <td>{{ $value->marca }}</td>
                                        <td>{{ $value->nombre_comercial }}</td>
                                        <td>{{ $value->denominacion_venta }}</td>
                                        <td>{{ $value->rnpa }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection