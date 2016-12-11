<div class="row">
    <div class="col-md-2">
        @if(isset($vehicle['attachments'][0]))
            <img src="{{ $vehicle['attachments'][0]['url']}}">
        @endif
    </div>
    <div class="col-md-10">
        @include('frontend.reservation.show.form')
    </div>
</div>