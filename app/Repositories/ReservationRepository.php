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

    public function getList()
    {
        return $this->reservation->with('vehicles')->orderBy('rent_start')->paginate();
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