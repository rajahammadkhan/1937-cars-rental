<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class OfficeSpaceSectionTwoController extends Controller
{

    public function datatable()
    {
        $office_space_section_two = CMS::where('page','office_space')->where('type',2)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($office_space_section_two)->toJson();
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

        return view('cms.pages.office_space.section_two.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $office_space_section_two                   =   new CMS;
        $office_space_section_two->heading_one      =   $request->category_name;
        $office_space_section_two->page             =   "office_space";
        $office_space_section_two->type             =   2;
        $office_space_section_two->save();
        


        return redirect()->route('other_pages.office_space');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $office_space_section_two)
    {
        $data = [
            'isEdit'                => true,
            'office_space_section_two'    => $office_space_section_two,
        ];

        // return $data['office_space_section_two'];

        return view('cms.pages.office_space.section_two.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $office_space_section_two)
    {

        $office_space_section_two->heading_one      =   $request->category_name;
        $office_space_section_two->page             =   "office_space";
        $office_space_section_two->type             =   2;
        $office_space_section_two->save();


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
        $office_space_section_two = CMS::where('id', $request->deleteId)->first();
        $office_space_section_two->delete();

        return response()->json($office_space_section_two, 200);
    }
}
