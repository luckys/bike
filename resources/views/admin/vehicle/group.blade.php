@if(count($items))
    <div class="col-lg-12">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <div class="col-lg-2 text-center">Español</div>
                <div class="col-lg-2 text-center">Inglés</div>
                <div class="col-lg-2 text-center">Alemán</div>
                <div class="col-lg-1 text-center">Categoría</div>
                <div class="col-lg-1 text-center">Precio 1 (barato</div>
                <div class="col-lg-1 text-center">Precio 2 (medio)</div>
                <div class="col-lg-1 text-center">Precio 3 (caro)</div>
                <div class="col-lg-1 text-center">Editar</div>
                <div class="col-lg-1 text-center">eliminar</div>
            </div>
            <div class="box-body">
                <div class="row">

                </div>
                <ul id="sortable_vehicle">
                    @foreach($items as $item)
                        @include('admin.vehicle.item')
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif