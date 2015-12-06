<?php

namespace App\Dailos\Services;

use App\Dailos\Repositories\BikeRepository;

class BikeService extends VehicleService
{
    public function __construct(BikeRepository $repo)
    {
        parent::__construct($repo);
    }

}