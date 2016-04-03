<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\CategoryRepository;
use App\Repositories\VehicleRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
        return view('admin.vehicle.index', [
            'vehicles' => $this->vehicleRepository->getList($type),
            'categories' => $this->categoryRepository->getList($type),
            'type' => $type,
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
            'prices.1' => 'required',
            'prices.2' => 'required',
            'prices.3' => 'required',
        ]);

        $vehicle = $this->vehicleRepository->create($request->all());
        return Redirect::route('vehicles.edit',$vehicle->id);
    }

    public function edit(Request $request, $id)
    {
        $vehicle  = $this->vehicleRepository->get($id);
        return view('admin.vehicle.edit', [
            'vehicle' => $vehicle,
            'categories' => $this->categoryRepository->getList($vehicle->typeName),
            'type' => $vehicle->typeName,
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
            'prices.1' => 'required',
            'prices.2' => 'required',
            'prices.3' => 'required',
        ]);
        $vehicle = $this->vehicleRepository->update($id,$request->all());
        return Redirect::route('vehicles',$vehicle->typeName);
    }

    public function delete($id)
    {
        $this->vehicleRepository->delete($id);
        return back();
    }

}