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

    public function create($reservation)
    {
        list($reservation['rent_start'], $reservation['rent_end']) = explode("-", $reservation['rent_period']);
        $reservation['code'] = $this->generateCode($reservation);
        return $this->reservationRepository->create($reservation);
    }

    private function generateCode($reservation)
    {
        while(true){
            $code = substr(md5($reservation['renter_email']. date('YYYY mm dd hh mm ss')), 1, 8);
            if(!$this->reservationRepository->findByCode($code)){
                return $code;
            }
        }

    }
    

}