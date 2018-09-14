<div class="main-container">
    <div class="container">
        @include('web.parts.alerts.success')
        @include('web.parts.alerts.error')
        <div class="row">
            <div class="col-md-3 page-sidebar">
                @include('web.parts.adminClient._aside')
            </div>

            <div class="col-md-9 page-content">
                <div class="inner-box">
                    <h2 class="title-2"><i class="icon-docs"></i> Listado de productos Desactivado</h2>

                    <div class="table-responsive">
                        <div class="table-action">
                            <div class="table-search pull-right col-sm-7">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-5 control-label text-right">Buscar <br>
                                            <a title="clear filter" class="clear-filter" href="#clear">[borrar
                                                búsqueda]</a>
                                        </label>

                                        <div class="col-sm-7 searchpan">
                                            <input type="text" class="form-control" id="filter">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="addManageTable"
                               class="table table-striped table-bordered add-manage-table table demo"
                               data-filter="#filter" data-filter-text-only="true">
                            <thead>
                            <tr>
                                <th>Foto</th>
                                <th data-sort-ignore="true">Nombre</th>
                                <th data-type="numeric">Precio</th>
                                <th>Opción</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($productsDisable as $productDisable)
                                <tr>
                                    <td style="width:14%" class="add-img-td">
                                        <a href="../images/{{ $commerce->name }}-{{ $commerce->id }}/products/{{ $productDisable->photo }}" target="_blank">
                                            <img class="thumbnail  img-responsive"
                                                 src="{{ asset('images/thumbnail/products/'.($productDisable->photo)) }}"
                                                 alt="img"></a>
                                    </td>
                                    <td style="width:58%" class="ads-details-td">
                                        <div>
                                            <p><strong> <a href="ads-details.html"
                                                           title="Brand New Nexus 4">{{ $productDisable->name }}</a>
                                                </strong></p>

                                            @if($productDisable->highlight == 'YES')
                                                <p><strong> Destacado </strong></p>
                                            @else
                                                <p><strong> Sin Destacado </strong></p>
                                            @endif

                                            @if($productDisable->in_offer == 'YES')
                                                <p><strong> En Oferta </strong></p>
                                            @else
                                                <p><strong> Sin Oferta </strong></p>
                                            @endif
                                        </div>
                                    </td>
                                    <td style="width:20%" class="price-td">
                                        <div>Precio: <strong>$ {{ $productDisable->price }}</strong></div>
                                        @if($productDisable->offer)
                                            <div>Rebaja: <strong>$ {{ $productDisable->offer }}</strong></div>
                                        @endif
                                    </td>
                                    <td style="width:10%" class="action-td">
                                        <div>
                                            <p>
                                                <a href="{{ route('product.edit', $productDisable->id) }}"
                                                   class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i> Editar
                                                </a>
                                            </p>

                                            <p>
                                                <a href="{{ route('available', $productDisable->id) }}" class="btn btn-info btn-sm">
                                                    <i class=" fa fa-retweet"></i>  Activar
                                                </a>
                                            </p>

                                            <p>
                                                {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $productDisable->id],'style'=>'display:inline']) !!}
                                                {{Form::token() }}
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class=" fa fa-trash"></i> Eliminar
                                                </button>
                                                {!! Form::Close() !!}
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-bar">
                            <nav aria-label="Page navigation " class="d-inline-b">
                                {!! $productsDisable->render() !!}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script src="{{ asset('webStyle/assets/js/footable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('webStyle/assets/js/footable.filter.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#addManageTable').footable().bind('footable_filtering', function (e) {
                var selected = $('.filter-status').find(':selected').text();
                if (selected && selected.length > 0) {
                    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                    e.clear = !e.filter;
                }
            });

            $('.clear-filter').click(function (e) {
                e.preventDefault();
                $('.filter-status').val('');
                $('table.demo').trigger('footable_clear_filter');
            });

        });
    </script>
@endsection