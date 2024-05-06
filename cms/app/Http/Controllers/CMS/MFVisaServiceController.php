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
use Illuminate\Support\Facades\Storage;

class MFVisaServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.mf_visa_services.index');
    }

    public function datatable()
    {
        $mf_visa_service = VisaService::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($mf_visa_service)->toJson();
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

        return view('cms.mf_visa_services.add', $data);
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
        
        $mf_visa_service         =   new VisaService;
        $mf_visa_service->name   =   $request->name;
        $mf_visa_service->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_visa_service->meta_title   =   $request->meta_title;
        $mf_visa_service->meta_description   =   $request->meta_description;
        $mf_visa_service->save();

        if($request->tab_name){
            foreach($request->tab_name as $value){
                if($value != null){
                    $visa_service_detail                     =   new VisaServiceDetail;
                    $visa_service_detail->mf_visa_service_id  =   $mf_visa_service->id;
                    $visa_service_detail->tab_name           =   $value;
                    $visa_service_detail->save();
                }
            }
        }

        return redirect()->route('mf_visa_service');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(VisaService $mf_visa_service)
    {
        $data = [
            'mf_visa_service'    => $mf_visa_service->load('details'),
        ];

        // return $data['mf_visa_service'];

        return view('cms.mf_visa_services.add-header-content', $data);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContentUpdate(Request $request, VisaService $mf_visa_service)
    {

        if($request->has('image')){
            Storage::disk('cms')->delete('', $mf_visa_service->top_image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);

            $mf_visa_service->top_image  =   $imageName;
        }

            $mf_visa_service->top_content    =   $request->top_content;
            $mf_visa_service->save();

        return redirect()->route('mf_visa_service');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VisaService $mf_visa_service)
    {
        $data = [
            'isEdit'                => true,
            'mf_visa_service'    => $mf_visa_service->load('details'),
        ];

        // return $data['mf_visa_service'];

        return view('cms.mf_visa_services.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisaService $mf_visa_service)
    {
        // return $request;

        $mf_visa_service->name   =   $request->name;
        $mf_visa_service->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_visa_service->meta_title   =   $request->meta_title;
        $mf_visa_service->meta_description   =   $request->meta_description;
        $mf_visa_service->save();

        $ids = [];

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){
                $ids[] = $key;
            }
        }

        VisaServiceDetail::whereNotIn('id',$ids)->where('mf_visa_service_id',$mf_visa_service->id)->delete();

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){

                $if_visa_service_detail              =   VisaServiceDetail::where('id',$key)->first();

                if($if_visa_service_detail){
                    $if_visa_service_detail->tab_name        =   $value;
                    $if_visa_service_detail->save();
                }else{
                    $visa_service_detail                     =   new VisaServiceDetail;
                    $visa_service_detail->mf_visa_service_id  =   $mf_visa_service->id;
                    $visa_service_detail->tab_name           =   $value;
                    $visa_service_detail->save();
                }
            }
        }

        return redirect()->route('mf_visa_service');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = VisaService::find($id);

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
        $mf_visa_service = VisaService::where('id', $request->deleteId)->first();
        VisaServiceDetail::where('mf_visa_service_id',$mf_visa_service->id)->delete();
        $mf_visa_service->delete();

        return response()->json($mf_visa_service, 200);
    }
}
