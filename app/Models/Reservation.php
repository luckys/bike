<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use SoftDeletes;
    protected $table = 'reservations';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['renter_name', 'renter_email', 'rent_start', 'rent_end' , 'code', 'options', 'vehicle_id', 'tos', 'notes'];
    protected $casts = ['options' => 'array'];

    //Relations
    public function vehicle()
    {
        return $this->hasOne('App\Models\Vehicle');
    }

    public function renter(){
        return $this->hasOne('App\Models\User');
    }
}
