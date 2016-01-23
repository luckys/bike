<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'informations';

    const FIELDTYPE_INPUT = 1;
    const FIELDTYPE_CHECKBOX = 2;

    public function scopeType($query, $type)
    {
        return $query->whereIn('type', [$type, null]);
    }
}