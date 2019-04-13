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
                                @foreach($lists as $list)
                                    <tr>
                                        <td>{{ $list->marca }}</td>
                                        <td>{{ $list->nombre_comercial }}</td>
                                        <td>{{ $list->denominacion_venta }}</td>
                                        <td>{{ $list->rnpa }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-list">
                                <ul>
                                    {{ $lists->render() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection