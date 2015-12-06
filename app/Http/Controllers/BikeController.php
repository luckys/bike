<?php

namespace App\Http\Controllers;

use App\Dailos\Services\BrandService;
use App\Dailos\Services\VehicleService;

class BikeController extends Controller
{
    protected $vehicleService;

    public function __construct(VehicleService $vehicleService, BrandService $brandService){
        $this->vehicleService = $vehicleService;
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brands = $this->brandService->all();
        $vehicles = $this->vehicleService->all();
        dd($brands);
        dd($vehicles);
    }

    public function show($id){
        dd($this->vehicleService->get($id));
    }

}