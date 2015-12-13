<?php

namespace App\Dailos\Repositories;


use App\Dailos\Entities\Information;

class InformationRepository
{
    protected $information;

    public function __construct(Information $information)
    {
        $this->information = $information;
    }

    public function all()
    {
        return $this->information->all();
    }
}