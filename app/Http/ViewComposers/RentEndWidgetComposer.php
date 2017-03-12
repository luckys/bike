<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\ReservationRepository;

class RentEndWidgetComposer
{
    protected $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function compose(View $view)
    {
        $reservations = $this->reservationRepository->getListToday('end');
        $view->with('reservations', $reservations);
    }
}