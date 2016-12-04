<div class="vehicle_list_item">
    <div class="row">
        <div class="col-md-4">
            @if(isset($vehicle['attachments'][0]))
                <img src="{{ $vehicle['attachments'][0]['url']}}">
            @endif
        </div>
        <div class="col-md-5">
            <h3>{{$vehicle['name']}}</h3>
            <br>
            <p>@lang('vehicle_list.condition1_'.$vehicle['type'])</p>
            <p>@lang('vehicle_list.condition2_'.$vehicle['type'])</p>
            <p>@lang('vehicle_list.condition3_'.$vehicle['type'])</p>

        </div>
        <div class="col-md-3">
            <div class="price">
                @lang('vehicle_list.starting') <span>{{$vehicle['prices'][1]}} </span>€
            </div>

            <button type="button" class="btn btn-primary bike-button"><h4>@lang('vehicle_list.reserve')</h4></button>
            <br>
            <a data-toggle="collapse" data-target="#features_{{$vehicle['id']}}">@lang('vehicle_list.more')</a>
        </div>
    </div>
    <div id="features_{{$vehicle['id']}}" class="row collapse features">
        @foreach($vehicle['informations'] as $name => $information)
            <div class="col-md-4"><b>{{$name}}:</b> {{$information['value']}}</div>
        @endforeach
    </div>
</div>
