<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    protected $fillable = ['status'];

    protected $connection = "web";

    protected $table = "cms";

    public function category()
    {
        return $this->hasOne('App\Models\CMS','id','category_id');
    }

}
