<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    const TYPE_IMAGE = 1;
    const TYPE_VIDEOURL = 2;
    const TYPE_PDF = 3;
    const TYPE_URL = 4;


    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}