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

    public function index(Request $request )
    {
        return view('admin.information.index', [
            'motorbikes' => $this->informationRepository->getList(Category::TYPE_MOTORBIKE),
            'bicicles' => $this->informationRepository->getList(Category::TYPE_BIKE),
            'mobility' => $this->informationRepository->getList(Category::TYPE_MOBILITY),
        ]);
    }

    public function create(Request $request)
    {
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
        $this->informationRepository->delete($id);
        return back();
    }


}