<?php

namespace App\Repositories;

use App\Models\Vehicle;

class VehicleRepository
{

    protected $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function get($id)
    {
        return $this->vehicle->with('informations', 'attachments')->firstOrFail($id);
    }

    public function getList($type = null, $category = null)
    {
        $vehicle = $this->vehicle->with('informations', 'attachments','category');

        if ($category) {
            $vehicle = $vehicle->category($category);
        }else{
            $vehicle = $vehicle->type($type);
        }

        return $vehicle->get();
    }

}