<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-arrow-down"></i>
        <span class="label reservation-status-2">{{$reservations->count()}}</span>
    </a>
    <ul class="dropdown-menu reservation-status-2">
        <li class="header">Reservas que acaban hoy</li>
        <li>
            <ul class="menu widget-reservation">
                @foreach($reservations as $reservation)
                    <li>
                        <strong>{{$reservation->vehicle->name['es']}}</strong>
                        <small><i class="fa fa-clock-o"></i> {{$reservation->rent_end->format('H:i')}}</small>
                        <p>{{$reservation->renter_name}}</p>

                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</li>