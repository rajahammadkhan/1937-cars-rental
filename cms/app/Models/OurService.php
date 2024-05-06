<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','status'];

    protected $connection = "web";

    protected $table = "mf_our_services";

    public function details()
    {
        return $this->hasMany('App\Models\OurServiceDetail','mf_our_service_id','id');
    }

}
