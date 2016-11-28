<div class="vehicle_list_item">
    <div class="row">
        <div class="col-md-4">
            @if(isset($vehicle['attachments'][0]))
                <img src="{{ $vehicle['attachments'][0]['url']}}">
            @endif
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <p><b>{{$vehicle['name']}}</b></p>
            <p>{{$vehicle['prices'][1]}} €</p>
            <button type="button" class="btn btn-primary">Reservar</button>
            <br>
            <a data-toggle="collapse" data-target="#features_{{$vehicle['id']}}">{{trans('more')}}</a>
        </div>
    </div>
    <div id="features_{{$vehicle['id']}}" class="row collapse">
        @foreach($vehicle['informations'] as $name => $information)
            <div class="col-md-4"><b>{{$name}}:</b> {{$information['value']}}</div>
        @endforeach
    </div>
</div>
