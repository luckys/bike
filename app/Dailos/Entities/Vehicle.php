<?php

namespace App\Dailos\Entities;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    const TYPE_MOTORBIKE = 1;
    const TYPE_BIKE = 2;
    const TYPE_MOBILITY = 3;

    public function informations()
    {
        return $this->belongsToMany('App\Dailos\Entities\Information');
    }


    public function getType()
    {
        switch ($this->type) {
            case self::TYPE_BIKE:
                return 'bike';
            case self::TYPE_MOTORBIKE:
                return 'motorbike';
            case self::TYPE_MOBILITY:
                return 'mobility';
        }
    }
}