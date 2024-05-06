<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetup extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','status'];

    protected $connection = "web";

    protected $table = "mf_business_setup";

    public function details()
    {
        return $this->hasMany('App\Models\BusinessSetupDetail','mf_business_setup_id','id');
    }

}
