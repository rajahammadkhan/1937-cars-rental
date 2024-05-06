<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LLCCompanyFormationDetail extends Model
{
    use HasFactory;

    protected $fillable = ['mf_llc_company_formation_id', 'tab_name'];

    protected $connection = "web";

    protected $table = "llc_company_formation_details";

}
