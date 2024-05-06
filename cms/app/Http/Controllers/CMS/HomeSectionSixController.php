<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class HomeSectionSixController extends Controller
{

    public function datatable()
    {
        $home_section_six = CMS::where('page','home')->where('type',6)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($home_section_six)->toJson();
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

        return view('cms.pages.home.section_six.add', $data);
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
            'image' => 'dimensions:min_width=353,min_height=235',
        ]);

        $home_section_six    =   new CMS;

        if($request->has('image')){
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_section_six->image_one  =   $imageName;
        }

        $home_section_six->page               =   'home';
        $home_section_six->heading_one        =   $request->name;
        $home_section_six->heading_two        =   $request->amount;
        $home_section_six->date             =   $request->date;
        $home_section_six->type               =   6;
        $home_section_six->save();

        return redirect()->route('other_pages.home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $home_section_six)
    {
        $data = [
            'isEdit'                => true,
            'home_section_six'    => $home_section_six,
        ];

        // return $data['home_section_six'];

        return view('cms.pages.home.section_six.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $home_section_six)
    {
        $request->validate([
            'icon' => 'dimensions:min_width=353,min_height=235',
        ]);

        

        if($request->has('image')){
            Storage::disk('cms')->delete('', $home_section_six->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $home_section_six->image_one  =   $imageName;
        }

        $home_section_six->page               =   'home';
        $home_section_six->heading_one        =   $request->name;
        $home_section_six->heading_two        =   $request->amount;
        $home_section_six->date    =   $request->date;
        $home_section_six->type               =   6;
        $home_section_six->save();

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
