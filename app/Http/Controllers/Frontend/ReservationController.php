<?php

namespace App\Http\Controllers\Frontend;

use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function show($vehicleid, $vehiclename){
        return view('frontend.reservation.show', ['vehicle' => $this->vehicleService->get($vehicleid)]);
    }

    public function confirm(Request $request)
    {

    }

}
