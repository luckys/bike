<?php

namespace App\Dailos\Entities;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    const FIELDTYPE_INPUT = 1;
    const FIELDTYPE_CHECKBOX = 2;
    const FIELDTYPE_IMAGE = 3;

    public function scopeType($query, $type)
    {
        return $query->whereIn('type', [$type, null]);
    }
}