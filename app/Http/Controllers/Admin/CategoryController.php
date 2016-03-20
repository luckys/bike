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

    public function index(Request $request )
    {
        return view('admin.category.index', ['categories' => $this->categoryRepository->getList()]);
    }

    public function create(Request $request)
    {
        if($request->has('name') && $request->has('type')){
            Category::create($request->all());
            return back()->with('msg' , 'Categoría creada!');
        }
        return back()->with('msg' , 'Error, faltan datos');
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('msg' , 'Categoría eliminada');
    }


}