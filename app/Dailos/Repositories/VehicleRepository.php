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
        return $this->vehicle->with('information')->firstOrFail($id);
    }

    public function all($filter = [])
    {
        $vehicle = $this->vehicle->with('information');
        if (isset($filter['type'])) {
            $vehicle = $vehicle->type($filter['type']);
        }

        return $vehicle->get();
    }

}