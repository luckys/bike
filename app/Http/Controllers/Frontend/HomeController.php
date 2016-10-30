<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\CategoryRepository;
use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $vehicleService;
    protected $categoryRepository;

    public function __construct(VehicleService $vehicleService, CategoryRepository $categoryRepository)
    {
        $this->vehicleService = $vehicleService;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $vehicles = $this->vehicleService->getAll();
        return view('frontend.home.index', compact('vehicles'));
    }

}