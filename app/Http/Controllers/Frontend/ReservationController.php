<?php

namespace App\Http\Controllers\Frontend;

use App\Services\ReservationService;
use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    /**
     * @var VehicleService
     */
    protected $vehicleService;

    /**
     * @var ReservationService
     */
    protected $reservationService;

    /**
     * ReservationController constructor.
     * @param VehicleService $vehicleService
     * @param ReservationService $reservationService
     */
    public function __construct(VehicleService $vehicleService, ReservationService $reservationService)
    {
        $this->vehicleService = $vehicleService;
        $this->reservationService = $reservationService;
    }

    /**
     * @param $vehicleid
     * @param $vehiclename
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($vehicleid, $vehiclename){ //vehicleName needed for SEO
        return view('frontend.reservation.show', ['vehicle' => $this->vehicleService->get($vehicleid)]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
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
