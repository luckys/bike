@extends('layout.main')
@section('content')
    <div id="list">
        {{ trans('bikes.test') }}
        @foreach ($vehicles as $vehicle)
            @include('vehicle.list._'.$type, ['vehicle' => $vehicle]);
        @endforeach
    </div>
@endsection