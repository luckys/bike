<?php

namespace App\Dailos\Services;


use App\Dailos\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    public function all()
    {
        return $this->categoryRepo->all();
    }
}