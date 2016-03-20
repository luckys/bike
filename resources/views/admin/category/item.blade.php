<td><h4>{{$category->name}}</h4></td>
<td>
    {{ Form::open(['method' => 'DELETE', 'route' => ['categories.delete', $category->id]]) }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}
</td>


