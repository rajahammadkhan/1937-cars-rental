<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurServiceDetail extends Model
{
    use HasFactory;

    protected $fillable = ['mf_our_service_id', 'tab_name'];

    protected $connection = "web";

    protected $table = "our_service_details";

}
