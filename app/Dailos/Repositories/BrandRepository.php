<?php

namespace App\Dailos\Repositories;

use App\Dailos\Entities\Brand;

class BrandRepository
{

    protected $model;

    public function __construct(Brand $model)
    {
        $this->model = $model;
    }

    public function all($filter = [])
    {
        return $this->model->all();
    }

}