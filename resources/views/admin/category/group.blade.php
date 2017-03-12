@if(count($items))
    <div class="col-lg-12">
        <div class="box box-solid box-{{$class}}">
            <div class="box-header">
                <h2 class="box-title">{{$title}}</h2>
            </div>
            <div class="box-body category_group">
                <div class="row margin-bottom">
                    <div class="col-lg-3 text-center"><strong>Español</strong></div>
                    <div class="col-lg-3 text-center"><strong>Inglés</strong></div>
                    <div class="col-lg-3 text-center"><strong>Alemán</strong></div>
                    <div class="col-lg-3 text-center"><strong>Acciones</strong></div>
                </div>
                @foreach($items as $item)
                    <div class="row margin-bottom category_item">
                        @include('admin.category.item')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif