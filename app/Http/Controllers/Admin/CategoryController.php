<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.category.index', $this->categoryRepository->all());
    }

    public function save($id){

    }


}