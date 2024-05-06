<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = "vehicles";

    public function features(){
        return $this->hasMany('App\Models\VehicleFeature','vehicle_id','id');
    }

    public function gallery_images(){
        return $this->hasMany('App\Models\VehicleGalleryImage','vehicle_id','id');
    }

}
