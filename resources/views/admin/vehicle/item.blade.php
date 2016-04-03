@foreach($item->name as $name)
    <td><h4>{{$name}}</h4></td>
@endforeach
<td><h4>{{$item->category->name['es']}}</h4></td>
@foreach($item->prices as $price)
    <td><h4>{{$price}} €</h4></td>
@endforeach
<td>
    <a href="{{route('vehicles.edit',['id'=> $item->id])}}" class="btn btn-primary" >Editar</a>
    @include('elements.delete_button',['route' => 'vehicles.delete', 'id' => $item->id])
</td>


