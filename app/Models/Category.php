<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const TYPE_MOTORBIKE = 'motorbike';
    const TYPE_BIKE = 'bike';
    const TYPE_MOBILITY = 'mobility';

    public function  scopeType($query , $type){
        return $query->where('type',$type);
    }
}