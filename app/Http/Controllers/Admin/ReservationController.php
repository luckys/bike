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
        if ($request->ajax()) {
            $filter = [];
            if($request->has('filter-status')){
                $filter['status'] = $request->input('filter-status');
            }
            return view('admin.reservation._list', ['reservations' => $this->reservationService->getList($filter)]);
        }
        return view('admin.reservation.index', ['reservations' => $this->reservationService->getList()]);
    }

    public function setStatus(Request $request, Reservation $reservation)
    {
        $reservation->status = $request->input('status');
        $reservation->save();
        return back();
    }
}