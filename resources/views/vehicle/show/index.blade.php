@extends('layout.main')
@section('content')
    <div id="vehicle_show">
        @include('vehicle.show._'.$vehicle->getType(), ['vehicle' => $vehicle]);
    </div>
@endsection
