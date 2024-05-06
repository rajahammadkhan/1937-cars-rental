<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class HomeSectionThreeController extends Controller
{

    public function datatable()
    {
        $home_section_three = CMS::where('page','home')->where('type',3)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($home_section_three)->toJson();
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

        return view('cms.pages.home.section_three.add', $data);
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
            'icon' => 'dimensions:min_width=90,min_height=90',
        ]);

        // Storage::disk('cms')->delete('', $home_section_three->image);

        $home_section_three    =   new CMS;

        if($request->has('icon')){
            $imageName = Storage::disk('cms')->putFile('', $request->icon);
            $home_section_three->image_one  =   $imageName;
        }

        $home_section_three->page               =   'home';
        $home_section_three->heading_one        =   $request->heading;
        $home_section_three->description_one    =   $request->description;
        $home_section_three->type               =   3;
        $home_section_three->save();

        return redirect()->route('other_pages.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $home_section_three)
    {
        $data = [
            'isEdit'                => true,
            'home_section_three'    => $home_section_three,
        ];

        // return $data['home_section_three'];

        return view('cms.pages.home.section_three.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $home_section_three)
    {
        $request->validate([
            'icon' => 'dimensions:min_width=90,min_height=90',
        ]);

        

        if($request->has('icon')){
            Storage::disk('cms')->delete('', $home_section_three->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->icon);
            $home_section_three->image_one  =   $imageName;
        }

        $home_section_three->page               =   'home';
        $home_section_three->heading_one        =   $request->heading;
        $home_section_three->description_one    =   $request->description;
        $home_section_three->type               =   3;
        $home_section_three->save();

        return redirect()->route('other_pages.home');
    }

    public function status(Request $request)
    {
        $status = $request->status;
        $id = $request->id;

        $item = CMS::find($id);

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
        $home_slider = CMS::where('id', $request->deleteId)->first();
        $home_slider->delete();

        return response()->json($home_slider, 200);
    }
}
