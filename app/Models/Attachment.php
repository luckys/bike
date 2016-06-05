<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    const TYPE_IMAGE = 1;
    protected $table = 'attachments';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['name', 'url', 'type', 'position', 'vehicle_id'];

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

}