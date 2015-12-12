<?php

namespace App\Http\Controllers;

use App\Dailos\Services\CategoryService;
use App\Dailos\Services\BikeService;

class BikeController extends Controller
{
    protected $bikeService;
    protected $categoryService;

    public function __construct(BikeService $bikeService, CategoryService $categoryService)
    {
        $this->bikeService = $bikeService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        return view('list.index', [
            'categories' => $this->categoryService->all(),
            'vehicles' => $this->bikeService->all(),
            'type' => 'bike',
        ]);
    }

    public function show($id){
        dd($this->bikeService->get($id));
    }

}