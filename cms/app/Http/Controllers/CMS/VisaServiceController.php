<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\VisaService;
use App\Models\VisaServiceDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;

class VisaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.visa_services.index');
    }

    public function datatable()
    {
        $visa_service = VisaService::where('status',1)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($visa_service)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VisaService $visa_service)
    {
        // return $visa_service;

        $data = [
            'isEdit'        => true,
            'visa_service'   => $visa_service->load('details'),
        ];

        // return $data['visa_service'];

        return view('cms.visa_services.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisaService $visa_service, $visa_service_detail_id)
    {
        $visa_service_detail                 =   VisaServiceDetail::where('id',$visa_service_detail_id)->first();
        $visa_service_detail->tab_content    =   $request->content;
        $visa_service_detail->save();

        return redirect()->route('visa_service');
    }

}
