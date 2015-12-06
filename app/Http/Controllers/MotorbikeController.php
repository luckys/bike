<?php

namespace App\Http\Controllers;

use App\Dailos\Services\BrandService;
use App\Dailos\Services\MotorbikeService;

class MotorbikeController extends Controller
{
    protected $motorbikeService;

    public function __construct(MotorbikeService $motorbikeService, BrandService $brandService){
        $this->motorbikeService = $motorbikeService;
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brands = $this->brandService->all();
        $motorbikes = $this->motorbikeService->all();
        dd($brands);
        dd($motorbikes);
    }

    public function show($id){
        dd($this->motorbikeService->get($id));
    }

}