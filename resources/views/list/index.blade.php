{{ trans('bikes.test') }}
@foreach ($vehicles as $vehicle)
    @include('list.'.$type, ['vehicle' => $vehicle]);
@endforeach