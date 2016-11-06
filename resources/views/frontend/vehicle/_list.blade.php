<div>
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                @foreach($vehicles as $vehicle)
                    @include('frontend.vehicle._vehicle')
                @endforeach
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>