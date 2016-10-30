<div class="row" style="border: 1px solid black;">
    <div class="left col-md-6">
        <p>{{$vehicle['name']}}</p>
        <p>{{$vehicle['prices'][1]}} €</p>
    </div>

    <div class="left col-md-6">
        <ul>
            @foreach($vehicle['informations'] as $name => $information)
                <li>{{$name}}: {{$information['value']}}</li>
            @endforeach
        </ul>
    </div>

</div>
