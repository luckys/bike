<?php

namespace App\Dailos\Services;

use App\Dailos\Repositories\VehicleRepository;

abstract class VehicleService
{
    protected $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepo = $vehicleRepository;
    }

    public function get($id){
        return $this->vehicleRepo->get($id);

    }

    public function all(){
        return $this->vehicleRepo->all();
    }

    public function persist(){

    }

}