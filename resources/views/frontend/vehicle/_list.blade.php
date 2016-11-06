<div>
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <ul class="nav nav-pills">
                    @foreach($categories as $category)
                        <li class="nav-item @if($category == $categories->first()) active @endif">
                            <a class="nav-link" data-toggle="tab"
                                href="#cat_{{$category->id}}">{{$category->name[$lang]}}</a>
                        </li>
                    @endforeach
                </ul>
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
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>

