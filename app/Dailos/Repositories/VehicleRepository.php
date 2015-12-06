<?php

namespace App\Dailos\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class VehicleRepository
{

    protected $model;

    public function __construct(Model $model)
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