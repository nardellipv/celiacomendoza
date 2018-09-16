<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">Admin CM</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-title">Menú</li>
        <li class="{{ request()->is('admin/') ? 'active' : '' }}">
            <a href="{{ url('admin/') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li class="{{ request()->is('admin/categorias') ? 'active' : '' }}">
            <a href="{{ url('admin/categorias') }}"><span class="fa fa-list"></span> <span class="xn-text">Categorias</span></a>
        </li>
    </ul>
</div>