<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\CategoryRepository;
use App\Services\VehicleService;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

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
        $categories = $this->categoryRepository->getList($type);
        $vehicleList = $this->vehicleService->getType($type);
        $vehicles = [];
        foreach ($vehicleList as $vehicle){
            if(!isset($vehicles[$vehicle['category_id']])){
                $vehicles[$vehicle['category_id']] = [];
            }
            $vehicles[$vehicle['category_id']][] = $vehicle;
        }
        $lang = App::getLocale();
        return view('frontend.vehicle.index', compact('vehicles', 'categories', 'lang'));
    }

    public function show($id){
        return view('frontend.vehicle.show.index', [
                'vehicle' => $this->vehicleService->get($id)
            ]
        );
    }

}
