@foreach ($vehicles as $vehicle)
    @include('vehicle.list._'.$vehicle->getType(), ['vehicle' => $vehicle]);
@endforeach
