@if(count($reservations))
    @foreach($reservations as $reservation)
        <div class="col-md-6 col-sm-6 col-xs-12">
            @include('admin.reservation._item')
        </div>
    @endforeach
    <div class="pull-right">
        {{ $reservations->links() }}
    </div>
@endif