<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return view('admin.category.index', [
            'motorbikes' => $this->categoryRepository->getList(Category::TYPE_MOTORBIKE),
            'bicicles' => $this->categoryRepository->getList(Category::TYPE_BIKE),
            'mobility' => $this->categoryRepository->getList(Category::TYPE_MOBILITY),
        ]);
    }
    
    public function create(Request $request)
    {
        $this->setDefaultNameValue($request);
        $this->validate($request, [
            'type' => 'required',
            'name.es' => 'required',
            'name.en' => 'required',
            'name.de' => 'required',
        ]);

        $this->categoryRepository->create($request->all());
        return back();
    }

    public function delete($id)
    {
        if(!$this->categoryRepository->delete($id))
        {
            return back()->withErrors(['Error' => 'Hay vehículos con esta categoría, imposible eliminar']);
        };
        return back();
    }
    
    public function update(Request $request)
    {
        
    }
}