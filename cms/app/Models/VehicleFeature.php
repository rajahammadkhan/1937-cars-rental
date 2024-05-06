<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleFeature extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'price','status'];

    protected $connection = "web";

    protected $table = "vehicle_features";

}
