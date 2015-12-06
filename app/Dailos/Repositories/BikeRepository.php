<?php

namespace App\Dailos\Repositories;


use App\Dailos\Entities\Bike;

class BikeRepository extends VehicleRepository
{
    public function __construct(Bike $model)
    {
        parent::__construct($model);
    }

}