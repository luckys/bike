@foreach ($vehicles as $vehicle)
    @include('vehicle.list._'.$vehicle->type_name, ['vehicle' => $vehicle]);
@endforeach
