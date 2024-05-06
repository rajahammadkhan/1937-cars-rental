<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\OurService;
use App\Models\OurServiceDetail;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Hash;
use DataTables;
use Auth;
use Illuminate\Support\Facades\Storage;

class MFOurServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.mf_our_services.index');
    }

    public function datatable()
    {
        $mf_our_service = OurService::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($mf_our_service)->toJson();
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

        return view('cms.mf_our_services.add', $data);
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
        
        $mf_our_service         =   new OurService;
        $mf_our_service->name   =   $request->name;
        $mf_our_service->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_our_service->meta_title   =   $request->meta_title;
        $mf_our_service->meta_description   =   $request->meta_description;
        $mf_our_service->save();

        if($request->tab_name){
            foreach($request->tab_name as $value){
                if($value != null){
                    $our_service_detail                     =   new OurServiceDetail;
                    $our_service_detail->mf_our_service_id  =   $mf_our_service->id;
                    $our_service_detail->tab_name           =   $value;
                    $our_service_detail->save();
                }
            }
        }

        return redirect()->route('mf_our_service');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(OurService $mf_our_service)
    {
        $data = [
            'mf_our_service'    => $mf_our_service->load('details'),
        ];

        // return $data['mf_our_service'];

        return view('cms.mf_our_services.add-header-content', $data);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContentUpdate(Request $request, OurService $mf_our_service)
    {

        if($request->has('image')){
            Storage::disk('cms')->delete('', $mf_our_service->top_image);

            $imageName = Storage::disk('cms')->putFile('', $request->image);

            $mf_our_service->top_image  =   $imageName;
        }

            $mf_our_service->top_content    =   $request->top_content;
            $mf_our_service->save();

        return redirect()->route('mf_our_service');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OurService $mf_our_service)
    {
        $data = [
            'isEdit'                => true,
            'mf_our_service'    => $mf_our_service->load('details'),
        ];

        // return $data['mf_our_service'];

        return view('cms.mf_our_services.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurService $mf_our_service)
    {
        // return $request;

        $mf_our_service->name   =   $request->name;
        $mf_our_service->slug   =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $mf_our_service->meta_title   =   $request->meta_title;
        $mf_our_service->meta_description   =   $request->meta_description;
        $mf_our_service->save();

        $ids = [];

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){
                $ids[] = $key;
            }
        }

        OurServiceDetail::whereNotIn('id',$ids)->where('mf_our_service_id',$mf_our_service->id)->delete();

        if($request->tab_name){
            foreach($request->tab_name as $key => $value){

                $if_our_service_detail              =   OurServiceDetail::where('id',$key)->first();

                if($if_our_service_detail){
                    $if_our_service_detail->tab_name        =   $value;
                    $if_our_service_detail->save();
                }else{
                    $our_service_detail                     =   new OurServiceDetail;
                    $our_service_detail->mf_our_service_id  =   $mf_our_service->id;
                    $our_service_detail->tab_name           =   $value;
                    $our_service_detail->save();
                }
            }
        }

        return redirect()->route('mf_our_service');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = OurService::find($id);

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
        $mf_our_service = OurService::where('id', $request->deleteId)->first();
        OurServiceDetail::where('mf_our_service_id',$mf_our_service->id)->delete();
        $mf_our_service->delete();

        return response()->json($mf_our_service, 200);
    }
}
