<?php

namespace App\Http\Controllers;

use App\Dailos\Repositories\CategoryRepository;
use App\Dailos\Repositories\VehicleRepository;

class VehicleController extends Controller
{
    protected $vehicleRepository;
    protected $categoryRepository;

    public function __construct(VehicleRepository $vehicleRepository, CategoryRepository $categoryRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index($type)
    {
        return view('vehicle.list.index', [
            'categories' => $this->categoryRepository->all($type),
            'vehicles' => $this->vehicleRepository->all($type),
            'type' => $type,
        ]);
    }

    public function show($id){
        return view('vehicle.show.index', [
                'vehicle' => $this->vehicleRepository->get($id)
            ]
        );
    }

}