<?php // Code within app\Helpers\Helper.php
use App\Models\Brand;
use App\Models\Setting;

use App\Models\Blog;
use App\Models\CMS;
use App\Models\Menu;
use App\Models\OurService;

if (!function_exists('getVehicleBrands')) {
    function getVehicleBrands()
    {
        return Brand::where('status',1)->get();
    }
}

if (!function_exists('getSettings')) {
    function getSettings($key)
    {
        return Setting::where('key',$key)->first()->value;
    }
}


if (!function_exists('getCurrentMenu')) {
    function getCurrentMenu($route)
    {
        return Menu::where('route',$route)->first() ?? null;
    }
}



if (!function_exists('getCurrentBlog')) {
    function getCurrentBlog($slug)
    {
        return Blog::where('slug',$slug)->first();
        
    }
}

if (!function_exists('cms_home_page')) {
    function cms_home_page()
    {
        return CMS::where('page','home')->where('status',1);
        
    }
}

if (!function_exists('cms_about_page')) {
    function cms_about_page()
    {
        return CMS::where('page','about_us')->where('status',1);
        
    }
}

if (!function_exists('cms_team_page')) {
    function cms_team_page()
    {
        return CMS::where('page','our_team')->where('status',1);
        
    }
}

if (!function_exists('getCurrentService')) {
    function getCurrentService($path, $slug)
    {
        if($path == 'our-services'){
            return OurService::where('slug',$slug)->first() ?? null;
        }
        
    }
}