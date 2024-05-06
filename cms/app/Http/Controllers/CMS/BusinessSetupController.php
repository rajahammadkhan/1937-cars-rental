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

class BusinessSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.business_setup.index');
    }

    public function datatable()
    {
        $business_setup = BusinessSetup::where('status',1)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($business_setup)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessSetup $business_setup)
    {
        // return $business_setup;

        $data = [
            'isEdit'        => true,
            'business_setup'   => $business_setup->load('details'),
        ];

        // return $data['business_setup'];

        return view('cms.business_setup.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessSetup $business_setup, $business_setup_detail_id)
    {
        $business_setup_detail                 =   BusinessSetupDetail::where('id',$business_setup_detail_id)->first();
        $business_setup_detail->tab_content    =   $request->content;
        $business_setup_detail->save();

        return redirect()->route('business_setup');
    }

}
