<?php

namespace App\Dailos\Services;


use App\Dailos\Repositories\BrandRepository;

class BrandService
{
    protected $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepo = $brandRepository;
    }

    public function all(){
        return $this->brandRepo->all();
    }
}