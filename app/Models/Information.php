<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes;
    protected $table = 'informations';

    const FIELDTYPE_INPUT = "input";
    const FIELDTYPE_CHECKBOX = "checkbox";
    const FIELDTYPE_IMAGE = "image";

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['name', 'type' , 'fieldtype'];
    protected $casts = ['name' => 'array'];

    public function scopeType($query, $type)
    {
        return $query->whereIn('type', [$type, '']);
    }
}

