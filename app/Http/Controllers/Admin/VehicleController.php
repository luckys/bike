<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attachment;
use App\Models\Information;
use App\Repositories\AttachmentRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\InformationRepository;
use App\Repositories\VehicleRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class VehicleController extends Controller
{
    protected $vehicleRepository;
    protected $categoryRepository;
    protected $informationRepository;
    protected $attachmentRepository;

    public function __construct(VehicleRepository $vehicleRepository,
                                CategoryRepository $categoryRepository,
                                InformationRepository $informationRepository,
                                AttachmentRepository $attachmentRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->categoryRepository = $categoryRepository;
        $this->informationRepository = $informationRepository;
        $this->attachmentRepository = $attachmentRepository;
    }

    public function index($type)
    {
        return view('admin.vehicle.index', [
            'vehicles' => $this->vehicleRepository->getList($type),
            'categories' => $this->categoryRepository->getList($type),
            'type' => $type,
        ]);
    }

    public function create(Request $request)
    {
        $this->setDefaultNameValue($request);
        $this->validate($request, [
            'category_id' => 'required',
            'prices.1' => 'required',
            'prices.2' => 'required',
            'prices.3' => 'required',
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
        ]);
        $vehicle = $this->vehicleRepository->create($request->all());
        return Redirect::route('vehicles.edit',$vehicle->id);
    }

    public function edit($id)
    {
        $vehicle = $this->vehicleRepository->get($id);
        return view('admin.vehicle.edit', [
            'vehicle' => $vehicle,
            'categories' => $this->categoryRepository->getList($vehicle->typeName),
            'informations' => $this->informationRepository->getList($vehicle->typeName),
            'vehicleInformations' => $vehicle->informations()->orderBy('pivot_position')->get(),
            'type' => $vehicle->typeName,
            'images' => $this->attachmentRepository->getList($id, Attachment::TYPE_IMAGE)
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
        $this->vehicleRepository->update($id,$request->all());
        return Redirect::route('vehicles.edit',$id);
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

    public function removeInformation($vehicleid, $id)
    {
        $this->vehicleRepository->removeInformation($vehicleid, $id);
        return Redirect::route('vehicles.edit',$vehicleid);
    }

    public function uploadImage(Request $request, $id){
        $data = explode(',', $request->input('base64image'));
        if(isset($data[1])){
            $filename = '/vehicle_img/'.$id. '_'. time()  . ".png";
            Image::make(base64_decode($data[1]))
                ->resize(config('bike.image-size'),config('bike.image-size'))
                ->save(public_path() . $filename);
            $this->attachmentRepository->create($id, $filename, Attachment::TYPE_IMAGE);
            return $filename;
        }
        abort(404);
    }

    public function sort(Request $request)
    {
        $this->vehicleRepository->sort($request->input('sortable_vehicle_id'));
    }

    public function sortInformations(Request $request, $id)
    {
        $this->vehicleRepository->sortInformations($id, $request->input('sortable_vehicle_information_id'));
    }
}
