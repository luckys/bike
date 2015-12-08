@foreach ($vehicles as $vehicle)
    @include('list.'.$type, ['vehicle' => $vehicle]);
@endforeach