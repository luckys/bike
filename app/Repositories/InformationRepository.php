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

    public function getList($type = null)
    {
        return $this->information->type($type)->get();
    }

    public function create($fields)
    {
        Information::create($fields);
    }

    public function delete($id)
    {
        $category = Information::findOrFail($id);
        $category->delete();
    }
}