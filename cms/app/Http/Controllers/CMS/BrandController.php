<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cms.brands.index');
    }

    public function datatable()
    {
        $brand = Brand::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($brand)->toJson();
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

        return view('cms.brands.add', $data);
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
            'name' => 'required',
        ]);

        // return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        
        $brand         =   new Brand;

        if($request->has('logo')){
            $imageName = Storage::disk('cms')->putFile('', $request->logo);
            $brand->logo  =   $imageName;
        }

        $brand->name   =   $request->name;
        $brand->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $brand->keywords             =   $request->keywords;
        $brand->meta_title           =   $request->meta_title;
        $brand->meta_description     =   $request->meta_description;
        $brand->save();

        return redirect()->route('brands');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $data = [
            'isEdit'                => true,
            'brand'    => $brand,
        ];

        // return $data['brand'];

        return view('cms.brands.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

        if($request->has('logo')){
            Storage::disk('cms')->delete('', $brand->logo);
            $imageName = Storage::disk('cms')->putFile('', $request->logo);
            $brand->logo  =   $imageName;
        }

        $brand->name   =   $request->name;
        $brand->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $brand->keywords             =   $request->keywords;
        $brand->meta_title           =   $request->meta_title;
        $brand->meta_description     =   $request->meta_description;
        $brand->save();

        return redirect()->route('brands');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = Brand::find($id);

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
        $brand = Brand::where('id', $request->deleteId)->first();
        $brand->delete();

        return response()->json($brand, 200);
    }
}
