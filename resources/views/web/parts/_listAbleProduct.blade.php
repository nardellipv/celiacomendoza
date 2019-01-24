@extends('layouts.login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h2>Listado de ANMAT 2018.</h2>
                <p>Listado ANMAT con toda la información de Alimentos libres de gluten registrados en el país. Este listado se extrajo
                directamente desde el sitio de ANMAT y así es como lo exponemos en nuestro sitio.</p>
                <br>
                <div class="call-to-action">
                    {!! Form::open(['method' => 'POST','route' => ['searchAble']]) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single-query form-group">
                                <input type="text" name="search" class="keyword-input"
                                       placeholder="Ingrese el producto a buscar...">
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
                            {{ $lists->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection