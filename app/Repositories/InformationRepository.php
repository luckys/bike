<?php

namespace App\Repositories;

use App\Models\Information;

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