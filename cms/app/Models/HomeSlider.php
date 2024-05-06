<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;

    protected $fillable = ['image','status'];

    protected $connection = "web";

    protected $table = "home_slider";

}
