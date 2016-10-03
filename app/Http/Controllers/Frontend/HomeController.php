<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use App\Repositories\VehicleRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $vehicleRepository;
    protected $categoryRepository;

    public function __construct(VehicleRepository $vehicleRepository, CategoryRepository $categoryRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $motos = $this->vehicleRepository->getList(Category::TYPE_MOTORBIKE);
        $bikes = $this->vehicleRepository->getList(Category::TYPE_BIKE);
        $mobilities = $this->vehicleRepository->getList(Category::TYPE_MOBILITY);
        return view('frontend.home.index', compact('motos', 'bikes', 'mobilities'));
    }

}