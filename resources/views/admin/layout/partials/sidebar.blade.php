<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu nav">
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

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
