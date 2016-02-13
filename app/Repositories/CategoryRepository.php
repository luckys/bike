<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function all($type = null)
    {
        if($type){
            return $this->category->type($type)->get();
        }
        return $this->category->get();
    }
}