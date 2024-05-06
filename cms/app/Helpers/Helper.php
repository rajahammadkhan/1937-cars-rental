<?php // Code within app\Helpers\Helper.php

use App\Models\Setting;

if (!function_exists('getSettings')) {
    function getSettings($key)
    {
        return Setting::where('key',$key)->first()->value;
    }
}