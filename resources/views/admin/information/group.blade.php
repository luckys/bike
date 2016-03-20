@if(count($items))
    <div class="col-md-4">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <h2 class="box-title">{{$title}}</h2>
            </div>
            <div class="box-body">
                <table class="table table-striped bring-up nth-2-center">
                    <tr>
                        <th>formato</th>
                        <th>Español</th>
                        <th>Inglés</th>
                        <th>Alemán</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                    @foreach($items as $item)
                        <tr>@include('admin.information.item')</tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endif