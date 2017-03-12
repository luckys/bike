<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use App\Repositories\ReservationRepository;
use App\Services\ReservationService;
use Carbon\Carbon;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    protected $reservationService;

    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }

    public function index(Request $request)
    {
        $status = null;
        if($request->has('status')){
            $status = $request->input('status');
        }
        $reservations = $this->reservationService->getList($status);
        return view('admin.reservation.index', [
            'reservations' => $reservations,
            'paginator' => $reservations->appends('status', $status)
        ]);
    }

    public function setStatus(Request $request, Reservation $reservation)
    {
        $reservation->status = $request->input('status');
        $reservation->save();
        return back();
    }

    public function setNote(Request $request, Reservation $reservation)
    {
        $reservation->notes = $request->input('note');
        $reservation->save();
        return back();
    }
}