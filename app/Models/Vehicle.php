<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['name', 'category_id','prices'];
    protected $casts = ['name' => 'array', 'prices' => 'array'];

    //Relations
    public function informations()
    {
        return $this->belongsToMany('App\Models\Information')->withPivot('value');
    }

    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }

    public function category()
    {
        return $this->BelongsTo('App\Models\Category');
    }

    //Scopes
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

    //Attributes
    public function getTypeNameAttribute()
    {
        return $this->category->type;
    }
}