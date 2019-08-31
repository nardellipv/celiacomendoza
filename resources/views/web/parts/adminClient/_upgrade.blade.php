@extends('web.adminClient')

@section('content')
    <section class="pricing-tables">
        <h4 class="tittle-w3-agileits mb-4 mt-3">Aumenta la visibilidad de tu negocio</h4>
        @include('web.parts.alerts.success')
        <div class="card-deck text-center row" style="margin-left: 12%;">
            <div class="card box-shadow col-xl-3 col-md-6">
                <div class="card-header">
                    <h4 class="py-md-4 py-xl-3 py-2">Free</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Visibilidad a todo el país</li>
                        <li class="py-2 border-bottom">Subir Productos</li>
                        <li class="py-2 border-bottom">Mensajes de clientes</li>
                        <li class="py-2 border-bottom"">Comentarios en el local</li>
                        <li class="py-2 border-bottom"><del>Más visibilidad dentro de celiacosMendoza</del></li>
                        <li class="py-2 border-bottom"><del>EMail de productos a usuarios de celiacosMendoza</del></li>
                        <li class="py-2"><del>Sitio Web Propio</del></li>
                    </ul>
                    <a href="{{ route('sendMailUpgrade', 1) }}" class="btn btn-lg btn-block btn-outline-primary py-2">Pedir información</a>
                </div>
            </div>
            <div class="card box-shadow col-xl-3 col-md-6 my-lg-0 my-3">
                <div class="card-header">
                    <h4 class="py-md-4 py-xl-3 py-2">Basic</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Visibilidad a todo el país</li>
                        <li class="py-2 border-bottom">Subir Productos</li>
                        <li class="py-2 border-bottom">Mensajes de clientes</li>
                        <li class="py-2 border-bottom">Comentarios en el local</li>
                        <li class="py-2 border-bottom">Más visibilidad dentro de celiacosMendoza</li>
                        <li class="py-2 border-bottom"><del>EMail de productos a usuarios de celiacosMendoza</del></li>
                        <li class="py-2"><del>Sitio Web Propio</del></li>
                    </ul>
                    <a href="{{ route('sendMailUpgrade', 2) }}" class="btn btn-lg btn-block btn-outline-primary py-2">Pedir información</a>
                </div>
            </div>
            <div class="card box-shadow col-xl-3 col-md-6 mt-lg-0 mt-3">
                <div class="card-header">
                    <h4 class="py-md-4 py-xl-3 py-2">Pro</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title pricing-card-title">
                    </h5>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li class="py-2 border-bottom">Visibilidad a todo el país</li>
                        <li class="py-2 border-bottom">Subir Productos</li>
                        <li class="py-2 border-bottom">Mensajes de clientes</li>
                        <li class="py-2 border-bottom">Comentarios en el local</li>
                        <li class="py-2 border-bottom">Más visibilidad dentro de celiacosMendoza</li>
                        <li class="py-2 border-bottom">EMail de productos a usuarios de celiacosMendoza</li>
                        <li class="py-2">Sitio Web Propio</li>
                    </ul>
                    <a href="{{ route('sendMailUpgrade', 3) }}" class="btn btn-lg btn-block btn-outline-primary py-2">Pedir información</a>
                </div>
            </div>
        </div>
    </section>
@endsection