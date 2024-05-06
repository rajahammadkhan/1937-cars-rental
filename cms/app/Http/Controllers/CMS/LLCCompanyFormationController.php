<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\LLCCompanyFormation;
use App\Models\LLCCompanyFormationDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;

class LLCCompanyFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.llc_company_formation.index');
    }

    public function datatable()
    {
        $llc_company_formation = LLCCompanyFormation::where('status',1)->get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($llc_company_formation)->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LLCCompanyFormation $llc_company_formation)
    {
        // return $llc_company_formation;

        $data = [
            'isEdit'        => true,
            'llc_company_formation'   => $llc_company_formation->load('details'),
        ];

        // return $data['llc_company_formation'];

        return view('cms.llc_company_formation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LLCCompanyFormation $llc_company_formation, $llc_company_formation_detail_id)
    {
        $llc_company_formation_detail                 =   LLCCompanyFormationDetail::where('id',$llc_company_formation_detail_id)->first();
        $llc_company_formation_detail->tab_content    =   $request->content;
        $llc_company_formation_detail->save();

        return redirect()->route('llc_company_formation');
    }

}
