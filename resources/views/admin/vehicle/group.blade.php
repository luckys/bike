@if(count($items))
    <div class="col-md-12">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <h2 class="box-title">{{$title}}</h2>
            </div>
            <div class="box-body">
                <table class="table table-striped bring-up nth-2-center">
                    <tr>
                        <th>Español</th>
                        <th>Inglés</th>
                        <th>Alemán</th>
                        <th>Categoría</th>
                        <th>Precio 1 (barato)</th>
                        <th>Precio 2 (medio)</th>
                        <th>Precio 3 (caro)</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                    @foreach($items as $item)
                        <tr>@include('admin.vehicle.item')</tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endif