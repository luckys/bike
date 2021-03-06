<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $table = 'reservations';

    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'rent_start', 'rent_end'];
    protected $fillable = ['renter_name', 'renter_email', 'rent_start', 'rent_end' , 'code', 'options', 'vehicle_id', 'tos', 'notes'];
    protected $casts = ['options' => 'array'];

    const STATUS_RESERVED = 0;
    const STATUS_COLLECTED = 1;
    const STATUS_COMPLETED = 2;

    //Relations
    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function renter(){
        return $this->belongsTo('App\Models\User');
    }
}
