<div class="row">
    <div class="col-md-4">
        @if(isset($vehicle['attachments'][0]))
            <img src="{{ $vehicle['attachments'][0]['url']}}">
        @endif
    </div>
    <div class="col-md-5">
        <h3>{{$vehicle['name']}}</h3>
    </div>
    <div class="col-md-3">
        <div class="price">
            <span>{{$vehicle['prices'][1]}} </span>€
            <span>{{$vehicle['prices'][2]}} </span>€
            <span>{{$vehicle['prices'][3]}} </span>€
        </div>
    </div>
</div>