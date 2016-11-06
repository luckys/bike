<div class="row" style="border: 1px solid black;">
    <div class="vechicle_basic">
        <div class="left col-md-6">
            <p>{{$vehicle['name']}}</p>
            <div class="vehicle_pic">
                @if(isset($vehicle['attachments'][0]))
                    <img src="{{ $vehicle['attachments'][0]['url']}}">
                @endif
            </div>
            <p>{{$vehicle['prices'][1]}} €</p>
        </div>
    </div>

    <div class="left col-md-6">
    </div>
    <div class="vechicle_description">
        <ul>
            @foreach($vehicle['informations'] as $name => $information)
                <li>{{$name}}: {{$information['value']}}</li>
            @endforeach
        </ul>
    </div>
</div>
