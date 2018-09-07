<aside>
    <div class="inner-box">
        <div class="user-panel-sidebar">
            <div class="collapse-box">
                <h5 class="collapse-title no-border"> Menú <a href="#MyClassified" aria-expanded="true"
                                                              data-toggle="collapse"
                                                              class="pull-right"><i
                                class="fa fa-angle-down"></i></a></h5>

                <div class="panel-collapse collapse show" id="MyClassified">
                    <ul class="acc-list">
                        <li><a class="{{ request()->is('cliente-perfil') ? 'active' : '' }}"
                               href="{{ url('cliente-perfil') }}"><i class="icon-user"></i>
                                Información </a></li>

                    </ul>
                </div>
            </div>
            <!-- /.collapse-box  -->
            <div class="collapse-box">
                <h5 class="collapse-title"> Mis Productos <a href="#MyAds" aria-expanded="true" data-toggle="collapse"
                                                             class="pull-right"><i
                                class="fa fa-angle-down"></i></a></h5>

                <div class="panel-collapse collapse show" id="MyAds">
                    <ul class="acc-list">
                        <li>
                            <a class="{{ request()->is('cliente-perfil/activos') ? 'active' : '' }}"
                               href="{{ url('cliente-perfil/activos') }}">
                                <i class="fa fa-check-circle"></i> Productos Activos
                                <span class="badge badge-secondary">{{ $countProductsAvailable }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('cliente-perfil/desactivos') ? 'active' : '' }}"
                               href="{{ url('cliente-perfil/desactivos') }}">
                                <i class="fa fa-times-circle"></i>
                                Productos Desactivos
                                <span class="badge badge-secondary">{{ $countProductsDisable }}</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="{{ request()->is('cliente-perfil/') ? 'active' : '' }}"
                               href="account-message-inbox.html">
                                <i class="icon-mail"></i>
                                Mensajes <span class="badge">15</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="collapse-box">
                <h5 class="collapse-title"></h5>

                <div class="panel-collapse collapse show" id="TerminateAccount">
                    <ul class="acc-list">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out-alt"></i>
                                Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>