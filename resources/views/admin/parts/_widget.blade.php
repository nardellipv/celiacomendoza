<br>
<div class="row">
    <div class="col-md-3">
        <div class="widget widget-warning widget-item-icon">
            <div class="widget-item-right">
                <span class="fa fa-users"></span>
            </div>
            <div class="widget-data-left">
                <div class="widget-int num-count">{{ $usersCountActive }}</div>
                <div class="widget-title">Usuarios</div>
                <div class="widget-subtitle">Usuarios Activos</div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget widget-warning widget-item-icon">
            <div class="widget-item-right">
                <span class="fa fa-ban"></span>
            </div>
            <div class="widget-data-left">
                <div class="widget-int num-count">{{ $usersCountDesactive }}</div>
                <div class="widget-title">Usuarios</div>
                <div class="widget-subtitle">Usuarios Desactivos</div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget widget-warning widget-item-icon">
            <div class="widget-item-right">
                <span class="fa fa-shopping-cart"></span>
            </div>
            <div class="widget-data-left">
                <div class="widget-int num-count">{{ $commerceCount }}</div>
                <div class="widget-title">Comercios</div>
                <div class="widget-subtitle">Cantidad Comercios</div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="widget widget-warning widget-item-icon">
            <div class="widget-item-right">
                <span class="fa fa-barcode"></span>
            </div>
            <div class="widget-data-left">
                <div class="widget-int num-count">{{ $productsCount }}</div>
                <div class="widget-title">Productos</div>
                <div class="widget-subtitle">Cantidad Productos</div>
            </div>
        </div>
    </div>
</div>
