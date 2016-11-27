<div class="row">
    <div class="col-md-4">
        @if(isset($vehicle['attachments'][0]))
            <img src="{{ $vehicle['attachments'][0]['url']}}">
        @endif
    </div>
    <div class="col-md-4">
        <ul>
            @foreach($vehicle['informations'] as $name => $information)
                <li>{{$name}}: {{$information['value']}}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-4">
        <p><b>{{$vehicle['name']}}</b></p>
        <p>{{$vehicle['prices'][1]}} €</p>
        <button type="button" class="btn btn-primary">Reservar</button>
    </div>
</div>
