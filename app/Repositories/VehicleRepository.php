<?php

namespace App\Repositories;

use App\Models\Information;
use App\Models\Vehicle;

class VehicleRepository
{

    protected $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function get($id)
    {
        return $this->vehicle->with('informations', 'attachments')->find($id);
    }

    public function getList($type = null, $category = null)
    {
        $vehicle = $this->vehicle->with('informations', 'attachments','category');

        if ($category) {
            $vehicle = $vehicle->category($category);
        }else if($type){
            $vehicle = $vehicle->type($type);
        }

        return $vehicle->orderBy('position')->get();
    }

    public function create($fields)
    {
        return $this->vehicle->create($fields);
    }

    public function update($id, $fields)
    {
        $vehicle = $this->vehicle->findOrFail($id);
        $vehicle->category_id = $fields['category_id'];
        $vehicle->name = $fields['name'];
        $vehicle->prices = $fields['prices'];
        $vehicle->save();
        return $vehicle;
    }

    public function delete($id)
    {
        $vehicle = $this->vehicle->findOrFail($id);
        $vehicle->delete();
    }

    public function addInformation($id, $fields)
    {
        $vehicle = $this->vehicle->findOrFail($id);
        $information = Information::findOrFail($fields['information_id']);
        $vehicle->informations()->attach($fields['information_id'], 
            ['value' => json_encode($fields['value']),
            'position' => $information->position]);
    }

    public function removeInformation($vehicleid, $id)
    {
        $vehicle = $this->vehicle->with('informations')->findOrFail($vehicleid);
        $vehicle->informations()->detach($id);
    }

    public function sort($list)
    {
        foreach ($list as $pos => $id){
            $vehicle = $this->vehicle->findOrFail($id);
            $vehicle->position = $pos;
            $vehicle->save();
        }
    }

    public function sortInformations($id, $list)
    {
        $vehicle = $this->vehicle->with('informations')->findOrFail($id);
        foreach ($list as $pos => $informationid){
            $vehicle->informations()->updateExistingPivot($informationid,['position' => $pos]);
        }
    }
}