<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu nav">
            <li class="{!! Request::is('admin/reservations') ? 'active' : '' !!}"><a href="{{ route('reservations') }}"><i class='fa fa-calendar-o'></i> <span>Reservas</span></a></li>
            <li class="{!! Request::is('admin/categories') ? 'active' : '' !!}"><a href="{{ route('categories') }}"><i class='fa fa-bookmark-o'></i> <span>Categorias</span></a></li>
            <li class="{!! Request::is('admin/informations') ? 'active' : '' !!}"><a href="{{ route('informations') }}"><i class='fa fa-cubes'></i> <span>Características</span></a></li>
            <li class="treeview {!! Request::is('admin/vehicles/*') ? 'active' : '' !!}">
                <a href="#"><i class='fa fa-motorcycle'></i> <span>Vehículos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{!! Request::is('admin/vehicles/motorbike') ? 'active' : '' !!}"><a href="{{ route('vehicles',['type' => \App\Models\Category::TYPE_MOTORBIKE]) }}">Motos</a></li>
                    <li class="{!! Request::is('admin/vehicles/bike') ? 'active' : '' !!}"><a href="{{ route('vehicles',['type' => \App\Models\Category::TYPE_BIKE]) }}">Bicicletas</a></li>
                    <li class="{!! Request::is('admin/vehicles/mobility') ? 'active' : '' !!}"><a href="{{ route('vehicles',['type' => \App\Models\Category::TYPE_MOBILITY]) }}">Movilidad reducida</a></li>
                </ul>
            </li>
            <li class="{!! Request::is('admin/translations') ? 'active' : '' !!}"><a href="{{ url('admin/translations') }}"><i class='fa fa-language'></i> <span>Traducciones</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
