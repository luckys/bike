@extends('layout.main')
@section('content')
    <div id="vehicle_show">
        @include('vehicle.show._'.$vehicle->type_name, ['vehicle' => $vehicle]);
    </div>
@endsection
