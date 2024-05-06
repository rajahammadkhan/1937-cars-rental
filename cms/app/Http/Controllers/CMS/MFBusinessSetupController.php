<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetup;
use App\Models\BusinessSetupDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class MFBusinessSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.mf_business_setup.index');
    }

    public function datatable()
    {
        $mf_business_setup = BusinessSetup::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($mf_business_setup)->toJson();
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

        return view('cms.mf_business_setup.add', $data);
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
        
        $mf_business_setup         =   new BusinessSetup;
        $mf_business_setup->name   =   $request->name;
        $mf_business_setup->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_business_setup->meta_title   =   $request->meta_title;
        $mf_business_setup->meta_description   =   $request->meta_description;
        $mf_business_setup->save();

        if($request->tab_name){
            foreach($request->tab_name as $value){
                if($value != null){
                    $business_setup_detail                     =   new BusinessSetupDetail;
                    $business_setup_detail->mf_business_setup_id  =   $mf_business_setup->id;
                    $business_setup_detail->tab_name           =   $value;
                    $business_setup_detail->save();
                }
            }
        }

        return redirect()->route('mf_business_setup');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(BusinessSetup $mf_business_setup)
    {
        $data = [
            'mf_business_setup'    => $mf_business_setup->load('details'),
        ];

        // return $data['mf_business_setup'];

        return view('cms.mf_business_setup.add-header-content', $data);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContentUpdate(Request $request, BusinessSetup $mf_business_setup)
    {

        if($request->has('image')){
            Storage::disk('cms')->delete('', $mf_business_setup->top_image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);

            $mf_business_setup->top_image  =   $imageName;
        }

            $mf_business_setup->top_content    =   $request->top_content;
            $mf_business_setup->save();

        return redirect()->route('mf_business_setup');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSetup $mf_business_setup)
    {
        $data = [
            'isEdit'                => true,
            'mf_business_setup'    => $mf_business_setup->load('details'),
        ];

        // return $data['mf_business_setup'];

        return view('cms.mf_business_setup.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessSetup $mf_business_setup)
    {
        // return $request;

        $mf_business_setup->name   =   $request->name;
        $mf_business_setup->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_business_setup->meta_title   =   $request->meta_title;
        $mf_business_setup->meta_description   =   $request->meta_description;
        $mf_business_setup->save();

        $ids = [];

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){
                $ids[] = $key;
            }
        }

        BusinessSetupDetail::whereNotIn('id',$ids)->where('mf_business_setup_id',$mf_business_setup->id)->delete();

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){

                $if_business_setup_detail              =   BusinessSetupDetail::where('id',$key)->first();

                if($if_business_setup_detail){
                    $if_business_setup_detail->tab_name        =   $value;
                    $if_business_setup_detail->save();
                }else{
                    $business_setup_detail                     =   new BusinessSetupDetail;
                    $business_setup_detail->mf_business_setup_id  =   $mf_business_setup->id;
                    $business_setup_detail->tab_name           =   $value;
                    $business_setup_detail->save();
                }
            }
        }

        return redirect()->route('mf_business_setup');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = BusinessSetup::find($id);

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
        $mf_business_setup = BusinessSetup::where('id', $request->deleteId)->first();
        BusinessSetupDetail::where('mf_business_setup_id',$mf_business_setup->id)->delete();
        $mf_business_setup->delete();

        return response()->json($mf_business_setup, 200);
    }
}
