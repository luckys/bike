<?php

namespace App\Dailos\Repositories;


use App\Dailos\Entities\Category;

class CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function all()
    {
        return $this->category->all();
    }
}