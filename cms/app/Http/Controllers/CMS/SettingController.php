<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.settings.settings');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // $request->validate([
        //     'header_image' => 'required|dimensions:min_width=1970,min_height=222',
        // ]);

        foreach($request->key as $key => $value){

            if($key == 'site_logo_header'){
                $setting = Setting::where('key',$key)->first();
                Storage::disk('cms')->delete('', $setting->value);
                $imageName = Storage::disk('cms')->putFile('', $value);
                $setting->value  =   $imageName;
            }elseif($key == 'site_logo_footer'){
                $setting = Setting::where('key',$key)->first();
                // Storage::disk('cms')->delete('', $setting->value);
                $imageName = Storage::disk('cms')->putFile('', $value);
                $setting->value  =   $imageName;
            }elseif($key == 'header_image'){
                $setting = Setting::where('key',$key)->first();
                // Storage::disk('cms')->delete('', $setting->value);   
                $imageName = Storage::disk('cms')->putFile('', $value);
                $setting->value  =   $imageName;
            }else{
                $setting = Setting::where('key',$key)->first();
                $setting->value =   $value;
            }

            
            $setting->save();
        }

        return redirect()->route('settings');
    }

}
