<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    const TYPE_MOTORBIKE = 'motorbike';
    const TYPE_BIKE = 'bike';
    const TYPE_MOBILITY = 'mobility';

    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'type'];

    public function  scopeType($query , $type){
        return $query->where('type',$type);
    }
}