<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','status'];

    protected $connection = "web";

    protected $table = "mf_visa_services";

    public function details()
    {
        return $this->hasMany('App\Models\VisaServiceDetail','mf_visa_service_id','id');
    }

}
