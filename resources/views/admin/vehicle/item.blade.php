<div class="row">
    @foreach($item->name as $name)
        <div class="col-lg-2 text-center">{{$name}}</div>
    @endforeach

    <div class="col-lg-1 text-center">{{$item->category->name['es']}}</div>

    @foreach($item->prices as $price)
        <div class="col-lg-1 text-center">{{$price}} €</div>
    @endforeach

    <div class="col-lg-1 text-center">
        <a href="{{route('vehicles.edit',['id'=> $item->id])}}" class="glyphicon glyphicon-edit"></a>
    </div>

    <div class="col-lg-1 text-center">
        @include('elements.delete_button',['route' => ['vehicles.delete', $item->id]])
    </div>
</div>


