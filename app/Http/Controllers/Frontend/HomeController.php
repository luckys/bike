<?php

namespace App\Http\Controllers\Frontend;

use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $vehicleService;
    protected $categoryRepository;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function index(Request $request)
    {
        return view('frontend.home.index');
    }

}