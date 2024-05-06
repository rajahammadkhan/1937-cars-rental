<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessSetupDetail extends Model
{
    use HasFactory;

    protected $fillable = ['mf_business_setup_id', 'tab_name'];

    protected $connection = "web";

    protected $table = "business_setup_details";

}
