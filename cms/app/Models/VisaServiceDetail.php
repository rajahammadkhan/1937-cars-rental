<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisaServiceDetail extends Model
{
    use HasFactory;

    protected $fillable = ['mf_visa_service_id', 'tab_name'];

    protected $connection = "web";

    protected $table = "visa_service_details";

}
