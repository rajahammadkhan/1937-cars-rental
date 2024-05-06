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
use Illuminate\Support\Facades\Storage;

class MFLLCCompanyFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.mf_llc_company_formation.index');
    }

    public function datatable()
    {
        $mf_llc_company_formation = LLCCompanyFormation::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($mf_llc_company_formation)->toJson();
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

        return view('cms.mf_llc_company_formation.add', $data);
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
        
        $mf_llc_company_formation         =   new LLCCompanyFormation;
        $mf_llc_company_formation->name   =   $request->name;
        $mf_llc_company_formation->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_llc_company_formation->meta_title   =   $request->meta_title;
        $mf_llc_company_formation->meta_description   =   $request->meta_description;
        $mf_llc_company_formation->save();

        if($request->tab_name){
            foreach($request->tab_name as $value){
                if($value != null){
                    $llc_company_formation_detail                     =   new LLCCompanyFormationDetail;
                    $llc_company_formation_detail->mf_llc_company_formation_id  =   $mf_llc_company_formation->id;
                    $llc_company_formation_detail->tab_name           =   $value;
                    $llc_company_formation_detail->save();
                }
            }
        }

        return redirect()->route('mf_llc_company_formation');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(LLCCompanyFormation $mf_llc_company_formation)
    {
        $data = [
            'mf_llc_company_formation'    => $mf_llc_company_formation->load('details'),
        ];

        // return $data['mf_llc_company_formation'];

        return view('cms.mf_llc_company_formation.add-header-content', $data);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContentUpdate(Request $request, LLCCompanyFormation $mf_llc_company_formation)
    {

        if($request->has('image')){
            Storage::disk('cms')->delete('', $mf_llc_company_formation->top_image);
            $imageName = Storage::disk('cms')->putFile('', $request->image);

            $mf_llc_company_formation->top_image  =   $imageName;
        }

            $mf_llc_company_formation->top_content    =   $request->top_content;
            $mf_llc_company_formation->save();

        return redirect()->route('mf_llc_company_formation');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LLCCompanyFormation $mf_llc_company_formation)
    {
        $data = [
            'isEdit'                => true,
            'mf_llc_company_formation'    => $mf_llc_company_formation->load('details'),
        ];

        // return $data['mf_llc_company_formation'];

        return view('cms.mf_llc_company_formation.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LLCCompanyFormation $mf_llc_company_formation)
    {
        // return $request;

        $mf_llc_company_formation->name   =   $request->name;
        $mf_llc_company_formation->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_llc_company_formation->meta_title   =   $request->meta_title;
        $mf_llc_company_formation->meta_description   =   $request->meta_description;
        $mf_llc_company_formation->save();

        $ids = [];

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){
                $ids[] = $key;
            }
        }

        LLCCompanyFormationDetail::whereNotIn('id',$ids)->where('mf_llc_company_formation_id',$mf_llc_company_formation->id)->delete();

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){

                $if_llc_company_formation_detail              =   LLCCompanyFormationDetail::where('id',$key)->first();

                if($if_llc_company_formation_detail){
                    $if_llc_company_formation_detail->tab_name        =   $value;
                    $if_llc_company_formation_detail->save();
                }else{
                    $llc_company_formation_detail                     =   new LLCCompanyFormationDetail;
                    $llc_company_formation_detail->mf_llc_company_formation_id  =   $mf_llc_company_formation->id;
                    $llc_company_formation_detail->tab_name           =   $value;
                    $llc_company_formation_detail->save();
                }
            }
        }

        return redirect()->route('mf_llc_company_formation');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = LLCCompanyFormation::find($id);

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
        $mf_llc_company_formation = LLCCompanyFormation::where('id', $request->deleteId)->first();
        LLCCompanyFormationDetail::where('mf_llc_company_formation_id',$mf_llc_company_formation->id)->delete();
        $mf_llc_company_formation->delete();

        return response()->json($mf_llc_company_formation, 200);
    }
}
