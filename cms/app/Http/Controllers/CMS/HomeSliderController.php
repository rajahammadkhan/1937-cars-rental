<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetup;
use App\Models\BusinessSetupDetail;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class HomeSliderController extends Controller
{

    public function datatable()
    {
        $home_slider = HomeSlider::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($home_slider)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'isEdit' => false,
        ];

        return view('cms.pages.home.slider.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|dimensions:min_width=1920,min_height=712',
        ]);

        // return "asdasd";

        $home_slider = new HomeSlider;

        if($request->has('image')){
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_slider->image  =   $imageName;
            $home_slider->save();
        }

        return redirect()->route('other_pages.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeSlider $home_slider)
    {
        $data = [
            'isEdit'                => true,
            'home_slider'    => $home_slider,
        ];

        // return $data['home_slider'];

        return view('cms.pages.home.slider.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $home_slider)
    {
        $request->validate([
            'image' => 'required|dimensions:min_width=1920,min_height=712',
        ]);

        if($request->has('image')){
            Storage::disk('cms')->delete('', $home_slider->image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_slider->image  =   $imageName;
            $home_slider->save();
        }

        return redirect()->route('other_pages.home');
    }

    public function status(Request $request)
    {
        $status = $request->status;
        $id = $request->id;

        $item = HomeSlider::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $home_slider = HomeSlider::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $home_slider->image);
        $home_slider->delete();

        return response()->json($home_slider, 200);
    }
}
