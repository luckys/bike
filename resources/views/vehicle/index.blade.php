{{ trans('bikes.test') }}
@foreach ($vehicles as $vehicle)
    @include('vehicle.list_items'.$type, ['vehicle' => $vehicle]);
@endforeach