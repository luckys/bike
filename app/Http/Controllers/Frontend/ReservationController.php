<?php

namespace App\Http\Controllers\Frontend;

use App\Services\ReservationService;
use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    protected $vehicleService;
    protected $reservationService;

    public function __construct(VehicleService $vehicleService, ReservationService $reservationService)
    {
        $this->vehicleService = $vehicleService;
        $this->reservationService = $reservationService;
    }

    public function show($vehicleid, $vehiclename){
        return view('frontend.reservation.show', ['vehicle' => $this->vehicleService->get($vehicleid)]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
           'renter_name' => 'required',
            'renter_email' => 'required|email',
            'tos' => 'required',
            'vehicle_id' => 'required',
        ]);
        $this->reservationService->create($request->all());
        return back();
    }

}
