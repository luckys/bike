<?php

namespace App\Dailos\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function  scopeType($query , $type){
        return $query->where('type',$type);
    }
}