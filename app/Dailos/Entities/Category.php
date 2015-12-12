<?php

namespace App\Dailos\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const TYPE_MOTORBIKE = 1;
    const TYPE_BIKE = 2;

    public function  scopeType($query , $type){
        return $query->where('type',$type);
    }
}