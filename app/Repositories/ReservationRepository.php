<?php

namespace App\Repositories;

use App\Models\Reservation;

class ReservationRepository
{

    protected $reservation;

    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    public function getList($filter = null)
    {
        $query = $this->reservation->with('vehicle', 'vehicle.attachments');
        if($filter){
            if(isset($filter['status']) && $filter['status'] !== ''){
                $query->where('status', $filter['status']);
            }
        }
        return $query->orderBy('rent_start')->paginate(10);
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