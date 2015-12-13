@extends('layout.main')
@section('content')
    <div id="show">
        @include('vehicle.list._'.$vehicle->getType(), ['vehicle' => $vehicle]);
    </div>
@endsection