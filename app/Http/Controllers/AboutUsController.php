<?php

namespace App\Http\Controllers;

use App\Models\CMS;
use App\Models\Brand;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'about_section_one'     =>  CMS::where('page','about_us')->where('type',1)->first(),
            'about_section_two'     =>  CMS::where('page','home')->where('type',3)->where('status',1)->get(),
            'about_section_three'     =>  CMS::where('page','home')->where('type',5)->where('status',1)->get(),
            'about_section_four'     =>  CMS::where('page','home')->where('type',7)->where('status',1)->get(),
            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
        ];

        return view('about-us',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
