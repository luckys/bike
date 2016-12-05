<?php

namespace App\Services;

use App;
use App\Repositories\ReservationRepository;
use Illuminate\Http\Request;

class ReservationService
{
    protected $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function create(Request $request)
    {
        return $this->reservationRepository->create($request->all());
    }
    

}