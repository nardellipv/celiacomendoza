<div class="widget widget-categories">
    <div class="widget-title">
        <h5>Categorias</h5>
    </div>
    <div class="widget-content">
        <ul class="list-unstyled mb-0">
            @foreach($listCategories as $listCategory)
                <li>
                    <a href="{{ url('listado-categoria', array($commerce->id,$listCategory->id)) }}"><i class="fa fa-angle-double-right"></i>{{ $listCategory->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>