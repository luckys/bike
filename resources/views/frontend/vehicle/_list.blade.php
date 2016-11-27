<div id="vehicle_list" class="container margin-top">
    <div class="row centered">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                        <ul class="nav panel-tabs">
                            @foreach($categories as $category)
                                <li class=" @if($category == $categories->first()) active @endif">
                                    <a data-toggle="tab" href="#cat_{{$category->id}}"><b>{{$category->name[$lang]}}</b></a>
                                </li>
                            @endforeach
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        @foreach($vehicles as $catId => $vehicleGrp)
                            <div class="tab-pane fade @if($catId == $categories->first()->id) active in @endif"
                                 id="cat_{{$catId}}" role="tabpanel">
                                @foreach($vehicleGrp as $vehicle)
                                    @include('frontend.vehicle._vehicle')
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>


