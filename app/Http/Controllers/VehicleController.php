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

    public function index(Request $request, $type, $category = null)
    {
        $view = '_list';
        $data = ['vehicles' => $this->vehicleRepository->getList($type,$category)];
        if (!$request->ajax()) {
            $view = 'index';
            $data['categories'] = $this->categoryRepository->getList($type);
        }
        return view('frontend.vehicle.list.' . $view, $data);
    }

    public function show($id){
        return view('frontend.vehicle.show.index', [
                'vehicle' => $this->vehicleRepository->get($id)
            ]
        );
    }

}