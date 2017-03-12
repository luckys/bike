<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ReservationRepository;

class RentStartWidgetComposer
{
    protected $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function compose(View $view)
    {
        $reservations = $this->reservationRepository->getListToday('start');
        $view->with('reservations', $reservations);
    }
}