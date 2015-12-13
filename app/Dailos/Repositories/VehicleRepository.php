<?php

namespace App\Dailos\Repositories;

use App\Dailos\Entities\Vehicle;

class VehicleRepository
{

    protected $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function get($id)
    {
        return $this->vehicle->firstOrFail($id);
    }

    public function all($filter = [])
    {
        return $this->vehicle->all();
    }

}