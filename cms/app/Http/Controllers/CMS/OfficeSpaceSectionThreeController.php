<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class OfficeSpaceSectionThreeController extends Controller
{

    public function datatable()
    {
        $office_space_section_three = CMS::with('category')->where('page','office_space')->where('type',3)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($office_space_section_three)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'categories'    =>  CMS::where('page','office_space')->where('type',2)->where('status',1)->get(),
            'isEdit'        => false,
        ];

        return view('cms.pages.office_space.section_three.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $office_space_section_three                   =   new CMS;

        if($request->has('image')){

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $office_space_section_three->image_one    =   $imageName;
        }
        
        $office_space_section_three->category_id      =   $request->category_id;
        $office_space_section_three->page             =   "office_space";
        $office_space_section_three->type             =   3;
        $office_space_section_three->save();
        


        return redirect()->route('other_pages.office_space');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $office_space_section_three)
    {
        $data = [
            'isEdit'                => true,
            'categories'    =>  CMS::where('page','office_space')->where('type',2)->where('status',1)->get(),
            'office_space_section_three'    => $office_space_section_three,
        ];

        // return $data['office_space_section_three'];

        return view('cms.pages.office_space.section_three.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $office_space_section_three)
    {

        if($request->has('image')){
            Storage::disk('cms')->delete('', $office_space_section_three->image_one);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $office_space_section_three->image_one    =   $imageName;
        }
        
        $office_space_section_three->category_id      =   $request->category_id;
        $office_space_section_three->page             =   "office_space";
        $office_space_section_three->type             =   3;
        $office_space_section_three->save();


        return redirect()->route('other_pages.office_space');
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
        $office_space_section_three = CMS::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $office_space_section_three->image_one);
        $office_space_section_three->delete();

        return response()->json($office_space_section_three, 200);
    }
}
