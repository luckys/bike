@foreach ($vehicles as $vehicle)
    @include('frontend.vehicle.list._'.$vehicle->type_name, ['vehicle' => $vehicle]);
@endforeach
