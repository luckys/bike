<?php

namespace App\Services;

use App;
use App\Repositories\ReservationRepository;

class ReservationService
{
    /**
     * @var ReservationRepository
     */
    protected $reservationRepository;

    /**
     * ReservationService constructor.
     * @param ReservationRepository $reservationRepository
     */
    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    /**
     * @param array $reservation
     * @return static
     */
    public function create(array $reservation)
    {
        list($reservation['rent_start'], $reservation['rent_end']) = explode("-", $reservation['rent_period']);
        $reservation['code'] = $this->generateCode($reservation);
        $reservation['rent_price'] = $this->calculatePrice($reservation);
        return $this->reservationRepository->create($reservation);
    }

    /**
     * @param array $reservation
     * @return string
     */
    private function generateCode(array $reservation)
    {
        while(true){
            $code = substr(md5($reservation['renter_email']. date('YYYY mm dd hh mm ss')), 1, 8);
            if(!$this->reservationRepository->findByCode($code)){
                return $code;
            }
        }

    }

    /**
     * @param array $reservation
     * @return int
     */
    private function calculatePrice(array $reservation)
    {
        $price = 1;
        return $price;
    }
    

}