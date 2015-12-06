<?php

namespace App\Dailos\Repositories;

use App\Dailos\Entities\Motorbike;

class MotorbikeRepository
{

    protected $model;

    public function __construct(Motorbike $model)
    {
        $this->model =$model;
    }

    public function get($id)
    {
        return $this->model->firstOrFail($id);
    }

    public function all($filter = [])
    {
        return $this->model->all();
    }

}