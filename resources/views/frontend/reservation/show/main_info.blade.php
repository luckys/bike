<div class="row">
    <div class="col-md-2">
        @if(isset($vehicle['attachments'][0]))
            <img src="{{ $vehicle['attachments'][0]['url']}}">
        @endif
    </div>
    <div class="col-md-10">
        <h3 class="margin-bottom">{{$vehicle['name']}}</h3>
        @include('frontend.reservation.show.form')
    </div>
</div>