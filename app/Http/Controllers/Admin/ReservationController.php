<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use App\Repositories\ReservationRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    protected $reservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function index()
    {
        return view('admin.reservation.index', ['reservations' => $this->reservationRepository->getList()]);
    }
}