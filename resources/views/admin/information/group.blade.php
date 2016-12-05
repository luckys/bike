@if(count($items))
    <div class="col-md-12">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <h2 class="box-title">{{$title}}</h2>
            </div>
            <div class="box-body">
                <div class="row margin-bottom">
                    <div class="col-lg-1 text-center"><strong>Tipo</strong></div>
                    <div class="col-lg-3 text-center"><strong>Español</strong></div>
                    <div class="col-lg-3 text-center"><strong>Inglés</strong></div>
                    <div class="col-lg-3 text-center"><strong>Alemán</strong></div>
                    <div class="col-lg-2 text-center"><strong>Acciones</strong></div>
                </div>
                <ul id="sortable_information">
                    @foreach($items as $item)
                        @include('admin.information.item')
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif