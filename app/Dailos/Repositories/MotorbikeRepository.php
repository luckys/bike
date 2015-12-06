<?php

namespace App\Dailos\Repositories;

use App\Dailos\Entities\Motorbike;

class MotorbikeRepository extends VehicleRepository
{

    public function __construct(Motorbike $model)
    {
        parent::__construct($model);
    }

}