<?php

namespace App\Services;

use App;
use App\Repositories\VehicleRepository;

class VehicleService
{
    protected $vehicleRepository;

    public function __construct(VehicleRepository $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function getType($type)
    {
        $vehicles = [];
        foreach($this->vehicleRepository->getList($type) as $vehicleItem){
            $vehicles[] = $this->DTO($vehicleItem);
        }

        return $vehicles;
    }

    private function DTO($vehicleItem)
    {
        return [
            'name' => $vehicleItem->name[App::getLocale()],
            'prices' => $vehicleItem->prices,
            'type' => $vehicleItem->category->type,
            'category' => $vehicleItem->category->name,
            'informations' => $this->informations($vehicleItem->informations),
            'attachments' => $vehicleItem->attachments->toArray(),
        ];
    }

    private function informations($informations)
    {
        $result = [];
        foreach ($informations as $information){
            $result[$information->name[App::getLocale()]] = [
                'fieldtype' => $information->fieldtype,
                'value' => json_decode($information->pivot->value)->{App::getLocale()},
                'position' =>$information->pivot->position,
            ];
        }
        return $result;
    }
    

}