<aside>
    <div class="sidebar-modern-inner">
        <div class="block-title has-arrow sidebar-header">
            <h5>Categorías</h5>
        </div>
        <div class="block-content categories-list  list-filter ">
            <ul class=" list-unstyled">
                @foreach($listCategories as $listCategory)
                    <li>
                        <a href="{{ url('listado-categoria', array($commerce->slug, $listCategory->id)) }}"><span
                                    class="title">{{ $listCategory->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="block-title has-arrow ">
            <h5>Últimos Productos</h5>
        </div>
        <div class="block-content locations-list  list-filter ">
            @include('web.parts._shopLastItems')
        </div>
    </div>
</aside>