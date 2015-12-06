<?php

namespace App\Http\Controllers;

use App\Dailos\Services\BrandService;
use App\Dailos\Services\BikeService;

class BikeController extends Controller
{
    protected $bikeService;

    public function __construct(BikeService $bikeService, BrandService $brandService){
        $this->bikeService = $bikeService;
        $this->brandService = $brandService;
    }

    public function index()
    {
        $brands = $this->brandService->all();
        $vehicles = $this->bikeService->all();
        dd($vehicles);
    }

    public function show($id){
        dd($this->bikeService->get($id));
    }

}