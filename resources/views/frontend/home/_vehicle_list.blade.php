@foreach($vehicles as $vehicle)
    @if($vehicle['type'] == $type)
        @include('frontend.home._vehicle_item')
    @endif
@endforeach