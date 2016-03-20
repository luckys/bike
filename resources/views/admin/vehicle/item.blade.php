@foreach($item->name as $name)
    <td><h4>{{$name}}</h4></td>
@endforeach
<td class="text-right">
    @include('elements.delete_button',['route' => 'vehicle.delete', 'id' => $item->id])
</td>


