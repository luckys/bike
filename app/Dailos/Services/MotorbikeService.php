<?php

namespace App\Dailos\Services;

use App\Dailos\Repositories\MotorbikeRepository;

class MotorbikeService extends VehicleService
{
    public function __construct(MotorbikeRepository $repo)
    {
        parent::__construct($repo);
    }

}