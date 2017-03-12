<?php

namespace App\Services;

use App;
use App\Repositories\ReservationRepository;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $reservation['status'] = 0;
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

    public function getList($status = null){
        $reservations = $this->reservationRepository->getList($status);
        foreach ($reservations as $reservation){
            $reservation->rent_start = Carbon::createFromFormat('Y-m-d H:i:s' ,$reservation->rent_start);
            $reservation->rent_end = Carbon::createFromFormat('Y-m-d H:i:s' ,$reservation->rent_end);
            $reservation->rent_duration = ceil($this->getRentDuration($reservation)/24);
            $reservation->rent_percentage = $this->getPercentage($reservation);
        };
        return $reservations;
    }

    private function getRentDuration($reservation)
    {
        return $reservation->rent_end->diffInHours($reservation->rent_start);
    }

    private function getPercentage($reservation)
    {
        $total = $this->getRentDuration($reservation);
        $completed = Carbon::now()->diffInHours($reservation->rent_start);
        $result = $completed/$total * 100;
        $result = $result > 100 ? 100 : $result;
        return $result;
    }

}