{{ Form::open(['method' => 'DELETE', 'route' => [$route, $id]]) }}
{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{{ Form::close() }}