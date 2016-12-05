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
        return $this->information->type($type)->orderBy('position')->get();
    }

    public function create($fields)
    {
        $this->information->create($fields);
    }

    public function delete($id)
    {
        $information = $this->information->findOrFail($id);
        if($information->vehicles->isEmpty())
        {
            $information->delete();
            return true;
        }
        return false;
    }

    public function update($id,$name)
    {
        $information = $this->information->findOrFail($id);
        $information->name = $name;
        $information->save();
    }

    public function sort($list)
    {
        foreach ($list as $pos => $id){
            $information = $this->information->findOrFail($id);
            $information->position = $pos;
            $information->save();
        }
    }
}