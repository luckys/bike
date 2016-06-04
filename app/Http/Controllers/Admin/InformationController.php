<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\InformationRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class InformationController extends Controller
{
    protected $informationRepository;

    public function __construct(InformationRepository $informationRepository)
    {
        $this->informationRepository = $informationRepository;
    }

    public function index()
    {
        return view('admin.information.index', [
            'motorbikes' => $this->informationRepository->getList(Category::TYPE_MOTORBIKE),
            'bicicles' => $this->informationRepository->getList(Category::TYPE_BIKE),
            'mobility' => $this->informationRepository->getList(Category::TYPE_MOBILITY),
        ]);
    }

    public function create(Request $request)
    {
        $this->setDefaultNameValue($request);
        $this->validate($request, [
            'fieldtype' => 'required',
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
        ]);

        $this->informationRepository->create($request->all());
        return back();  
    }

    public function delete($id)
    {
        if(!$this->informationRepository->delete($id))
        {
            return back()->withErrors(['Error' => 'Hay vehículos con esta característica, imposible eliminar']);
        };
        return back();
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
        ]);
        $this->informationRepository->update($id, $request->get('name'));
        return back();
    }

}