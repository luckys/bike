<?php

namespace App\Dailos\Repositories;

use App\Dailos\Entities\Category;

class CategoryRepository
{

    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function all($filter = [])
    {
        return $this->model->all();
    }

}