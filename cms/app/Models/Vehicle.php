<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price','status'];

    protected $connection = "web";

    protected $table = "vehicles";

    public function features(){
        return $this->hasMany('App\Models\VehicleFeature','vehicle_id','id');
    }

}
