<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleGalleryImage extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'price','status'];

    protected $connection = "web";

    protected $table = "vehicle_gallery_images";

}
