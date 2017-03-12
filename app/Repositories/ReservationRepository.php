<?php

namespace App\Repositories;

use App\Models\Reservation;
use Carbon\Carbon;

class ReservationRepository
{

    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function getList($status = null)
    {
        $query = $this->reservation->with('vehicle', 'vehicle.attachments');
        if($status){
            if(isset($status) && $status !== ''){
                $query->where('status', $status);
            }
        }
        return $query->orderBy('rent_start')->paginate(10);
    }

    public function getListToday($type)
    {
        return  $this->reservation->with('vehicle')->whereBetween('rent_'.$type , [Carbon::today(), Carbon::tomorrow()] )->
        orderBy('rent_'.$type, 'ASC')->get();
    }

    public function create($fields)
    {
        return $this->reservation->create($fields);
    }

    public function set($id, $field)
    {
        $reservation = $this->reservation->findOrFail($id);
        $reservation->{$field} = true;
        $reservation->save();
        return $reservation;
    }

    public function delete($id)
    {
        $reservation = $this->reservation->findOrFail($id);
        $reservation->delete();
    }

    public function findByCode($code)
    {
        return $this->reservation->where('code', $code)->count();
    }
}