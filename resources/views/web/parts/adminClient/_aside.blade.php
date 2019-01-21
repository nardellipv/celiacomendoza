<div class="profile-leftbar">
    <img src="{{ asset('images/'.$commerce->name.'-'.$commerce->id.'/logo/'.($commerce->logo)) }}" class="img-responsive">
</div>

<div class="profile-list">
    <ul>
        <li class="{{ request()->is('cliente-perfil') ? 'active' : '' }}">
            <a href="{{ url('cliente-perfil') }}">
                <i class="fa fa-user-o" aria-hidden="true"></i> Mi Perfil</a>
        </li>
        <li class="{{ request()->is('cliente-perfil/activos') ? 'active' : '' }}">
            <a href="{{ url('cliente-perfil/activos') }}">
                <i class="fa fa-check-circle"></i> Productos Activos
                <span class="badge badge-secondary">{{ $countProductsAvailable }}</span></a>
        </li>
        <li class="{{ request()->is('cliente-perfil/desactivos') ? 'active' : '' }}">
            <a href="{{ url('cliente-perfil/desactivos') }}">
                <i class="fa fa-times-circle"></i> Productos En Pausa
                <span class="badge badge-secondary">{{ $countProductsDisable }}</span></a>
        </li>
        <li class="{{ request()->is('cliente-perfil/mensajes') ? 'active' : '' }}">
            <a href="{{ url('cliente-perfil/mensajes') }}">
                <i class="fa fa-commenting" aria-hidden="true"></i> Mensajes
                <span class="badge">  {{ $countMessage }}</span></a>
        </li>
        <li>
            <a href="{{ url('cliente-perfil/product/create') }}">
                <i class="fa fa-plus-square" aria-hidden="true"></i> Agregar producto</a>
        </li>

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"><i class="fa fa-lock" aria-hidden="true"></i>
                Salir</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
<div class="profile-leftbar">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- regionsCeliacos -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-7543412924958320"
         data-ad-slot="4444645960"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>