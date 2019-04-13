@extends('layouts.main')

@section('content')
    <div class="content">
        <section>
            <div class="container">
                <div class="call-to-action">
                    {!! Form::open(['method' => 'POST','route' => ['searchAble']]) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-input">
                                <input type="text" name="search"
                                       placeholder="Ingrese el producto a buscar...">
                            </div>
                        </div>
                        <div class="col-sm-6 left-block">
                            <div class="form-textarea">
                                <button type="submit">Buscar</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::Close() !!}
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <table class="table datatable" style="background-color: #ffbb00;">
                                <thead>
                                <tr style="color: black">
                                    <th style="text-align: center">Marca</th>
                                    <th style="text-align: center">Nombre Comercial</th>
                                    <th style="text-align: center">Denominación Venta</th>
                                    <th style="text-align: center">RNPA</th>
                                </tr>
                                </thead>
                                <tbody style="color: black">
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
        </section>
    </div>
@endsection