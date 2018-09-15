@extends('layouts.adminClient')

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 page-sidebar">
                    @include('web.parts.adminClient._aside')
                </div>

                <div class="col-md-9 page-content">
                    <div class="inner-box">
                        <h2 class="title-2"><i class="fa fa-shopping-cart"></i> Listado de productos Vendidos </h2>

                        <div style="clear:both"></div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Código Venta</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($purcharses as $purchars)
                                    <tr>
                                        <td>{{ $purchars->num_invoice }}</td>
                                        <td>
                                            <span data-placement="right" data-toggle="tooltip" data-original-title="{{ $purchars->name }}">
                                                {{ str_limit($purchars->name,30) }}
                                            </span>
                                        </td>
                                        <td>{{ $purchars->quantity }}</td>
                                        <td>$ {{ $purchars->price }}</td>
                                        <td>{{ Date::parse($purchars->created_at)->format('d/m/Y H:m') }}</td>
                                        @if($purchars->status == 'FINISH')
                                            <td><span class="label label-default">Finalizada</span></td>
                                        @else
                                            <td><span class="label label-default">Pendiente</span></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection