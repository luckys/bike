<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function informations()
    {
        return $this->belongsToMany('App\Models\Information');
    }

    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }

    public function category()
    {
        return $this->BelongsTo('App\Models\Category');
    }

    public function scopeType($query,$type)
    {
        $query->whereHas('category', function($q) use ($type){
            $q->where('type', $type);
        });
    }

    public function scopeCategory($query,$category)
    {
        $query->where('category_id', $category);
    }

    public function getTypeNameAttribute()
    {
        return $this->category->type;
    }
}