@if(count($items))
    <div class="col-lg-12">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <h2 class="box-title">{{$title}}</h2>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-2 text-center"><p class="bg-success">Español</p></div>
                    <div class="col-lg-2 text-center"><p class="bg-success">Inglés</p></div>
                    <div class="col-lg-2 text-center"><p class="bg-success">Alemán</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-success">Categoría</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-success">Precio 1 (barato</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-success">Precio 2 (medio)</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-success">Precio 3 (caro)</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-warning">Editar</p></div>
                    <div class="col-lg-1 text-center"><p class="bg-danger">eliminar</p></div>
                </div>
                <ul id="sortable_vehicle">
                    @foreach($items as $item)
                        <li class="ui-state-default" id="sortable_vehicle_id_{{$item->id}}">
                            @include('admin.vehicle.item')
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif