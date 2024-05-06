<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLCCompanyFormation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug','status'];

    protected $connection = "web";

    protected $table = "mf_llc_company_formation";

    public function details()
    {
        return $this->hasMany('App\Models\LLCCompanyFormationDetail','mf_llc_company_formation_id','id');
    }

}
