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

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['name', 'type' , 'fieldtype'];
    protected $casts = ['name' => 'array'];

    //Relations
    public function vehicles()
    {
        return $this->belongsToMany('App\Models\Vehicle')->withPivot('value', 'position');
    }

    public function scopeType($query, $type)
    {
        return $query->whereIn('type', [$type, '']);
    }
}

