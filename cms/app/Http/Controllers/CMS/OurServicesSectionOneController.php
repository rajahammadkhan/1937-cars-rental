<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class OurServicesSectionOneController extends Controller
{

    public function datatable()
    {
        $our_services_section_one = CMS::where('page','our_services')->where('type',1)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($our_services_section_one)->toJson();
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

        return view('cms.pages.our_services.section_one.add', $data);
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
            'image' => 'required|dimensions:min_width=606,min_height=408',
        ]);

        $our_services_section_one               =   new CMS;

        if($request->has('image')){

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $our_services_section_one->image_one    =   $imageName;
        }

        $our_services_section_one->page             =   "our_services";
        $our_services_section_one->description_one      =   $request->description;
        $our_services_section_one->type             =   1;
        $our_services_section_one->save();

        return redirect()->route('other_pages.our_services');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CMS $our_services_section_one)
    {
        $data = [
            'isEdit'                => true,
            'our_services_section_one'    => $our_services_section_one,
        ];

        // return $data['our_services_section_one'];

        return view('cms.pages.our_services.section_one.add', $data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CMS $our_services_section_one)
    {
        $request->validate([
            'image' => 'dimensions:min_width=606,min_height=408',
        ]);

        if($request->has('image')){
            Storage::disk('cms')->delete('', $our_services_section_one->image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $our_services_section_one->image_one    =   $imageName;
        }

        $our_services_section_one->page             =   "our_services";
        $our_services_section_one->description_one      =   $request->description;
        $our_services_section_one->type             =   1;
        $our_services_section_one->save();

        return redirect()->route('other_pages.our_services');
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
        $our_services_section_one = CMS::where('id', $request->deleteId)->first();
        $our_services_section_one->delete();

        return response()->json($our_services_section_one, 200);
    }
}
