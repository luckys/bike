<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\VehicleRepository;
use \Illuminate\Http\Request;

class VehicleController extends Controller
{
    protected $vehicleRepository;
    protected $categoryRepository;

    public function __construct(VehicleRepository $vehicleRepository, CategoryRepository $categoryRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request, $type)
    {
        $view = '_list';
        $data = ['vehicles' => $this->vehicleRepository->all($type)];
        if (!$request->ajax()) {
            $view = 'index';
            $data['categories'] = $this->categoryRepository->all($type);
        }
        return view('vehicle.list.' . $view, $data);
    }

    public function show($id){
        return view('vehicle.show.index', [
                'vehicle' => $this->vehicleRepository->get($id)
            ]
        );
    }

}