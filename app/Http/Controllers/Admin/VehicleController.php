<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use App\Repositories\CategoryRepository;
use App\Repositories\InformationRepository;
use App\Repositories\VehicleRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    protected $vehicleRepository;
    protected $categoryRepository;
    protected $informationRepository;

    public function __construct(VehicleRepository $vehicleRepository, CategoryRepository $categoryRepository, InformationRepository $informationRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->informationRepository = $informationRepository;
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
        $vehicle = $this->vehicleRepository->get($id);
        return view('admin.vehicle.edit', [
            'vehicle' => $vehicle,
            'categories' => $this->categoryRepository->getList($vehicle->typeName),
            'informations' => $this->informationRepository->getList($vehicle->typeName),
            'vehicleInformations' => $vehicle->informations()->get(),
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

    public function addInformation(Request $request, $id){
        $data = $request->all();
        $name = $data['name'];
        if($data['fieldtype'] == Information::FIELDTYPE_CHECKBOX){
            $name['es'] = isset($data['checkbox_value']);
        }
        $request->merge(['value' => [
            'es' => $name['es'],
            'en' => empty($name['en']) ? $name['es'] : $name['en'],
            'de' => empty($name['de']) ? $name['es'] : $name['de']
        ]]);

        $this->validate($request, [
            'information_id' => 'required',
            'value.es' => 'required',
            'value.en' => 'required',
            'value.de' => 'required',
        ]);
        $this->vehicleRepository->addInformation($id,$request->all());
        return Redirect::route('vehicles.edit',$id);
    }

}