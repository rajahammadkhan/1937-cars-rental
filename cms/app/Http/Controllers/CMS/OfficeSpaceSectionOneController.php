<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class OfficeSpaceSectionOneController extends Controller
{

    public function datatable()
    {
        $office_space_section_one = CMS::where('page','office_space')->where('type',1)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($office_space_section_one)->toJson();
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

        return view('cms.pages.office_space.section_one.add', $data);
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
            'image' => 'required|dimensions:min_width=1170,min_height=550',
        ]);

        $office_space_section_one               =   new CMS;

        if($request->has('image')){

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $office_space_section_one->image_one    =   $imageName;
            $office_space_section_one->page             =   "office_space";
            $office_space_section_one->type             =   1;
            $office_space_section_one->save();
        }


        return redirect()->route('other_pages.office_space');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $office_space_section_one)
    {
        $data = [
            'isEdit'                => true,
            'office_space_section_one'    => $office_space_section_one,
        ];

        // return $data['office_space_section_one'];

        return view('cms.pages.office_space.section_one.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $office_space_section_one)
    {
        $request->validate([
            'image' => 'dimensions:min_width=1170,min_height=550',
        ]);

        if($request->has('image')){
            Storage::disk('cms')->delete('', $office_space_section_one->image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $office_space_section_one->image_one    =   $imageName;
            $office_space_section_one->page             =   "office_space";
            $office_space_section_one->type             =   1;
            $office_space_section_one->save();
        }


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
        $office_space_section_one = CMS::where('id', $request->deleteId)->first();
        $office_space_section_one->delete();

        return response()->json($office_space_section_one, 200);
    }
}
