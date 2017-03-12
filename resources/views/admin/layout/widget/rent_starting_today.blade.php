<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-arrow-up"></i>
        <span class="label reservation-status-1">{{$reservations->count()}}</span>
    </a>
    <ul class="dropdown-menu reservation-status-1">
        <li class="header">Reservas que comienzan hoy</li>
        <li>
            <ul class="menu widget-reservation">
                @foreach($reservations as $reservation)
                    <li>
                       <strong>{{$reservation->vehicle->name['es']}}</strong>
                            <small><i class="fa fa-clock-o"></i> {{$reservation->rent_start->format('H:i')}}</small>
                        <p>{{$reservation->renter_name}}</p>

                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</li>