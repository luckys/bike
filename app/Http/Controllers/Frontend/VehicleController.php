<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\CategoryRepository;
use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    protected $vehicleService;
    protected $categoryRepository;

    public function __construct(VehicleService $vehicleService, CategoryRepository $categoryRepository)
    {
        $this->vehicleService = $vehicleService;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request, $type)
    {
        $vehicles = $this->vehicleService->getType($type);
        return view('frontend.vehicle.index', compact('vehicles'));
    }

    public function show($id){
        return view('frontend.vehicle.show.index', [
                'vehicle' => $this->vehicleService->get($id)
            ]
        );
    }

}
