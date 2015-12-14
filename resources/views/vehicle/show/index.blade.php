@extends('layout.main')
@section('content')
    <div id="show">
        @include('vehicle.show._'.$vehicle->getType(), ['vehicle' => $vehicle]);
    </div>
@endsection
