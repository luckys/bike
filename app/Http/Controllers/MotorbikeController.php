<?php

namespace App\Http\Controllers;

use App\Dailos\Services\CategoryService;
use App\Dailos\Services\MotorbikeService;

class MotorbikeController extends Controller
{
    protected $motorbikeService;
    protected $categoryService;

    public function __construct(MotorbikeService $motorbikeService, CategoryService $categoryService)
    {
        $this->motorbikeService = $motorbikeService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->all();
        $motorbikes = $this->motorbikeService->all();
        dd($motorbikes);
    }

    public function show($id){
        dd($this->motorbikeService->get($id));
    }

}