<?php

namespace App\Http\Controllers;

use App\Models\CMS;
use App\Models\Brand;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'video_section' =>  CMS::where('page','home')->where('type',1)->first(),
            'brands'        =>  Brand::where('status',1)->where('logo','!=',null)->get(),
            'home_section_two' =>  CMS::where('page','home')->where('type',2)->first(),
            'home_section_three' =>  CMS::where('page','home')->where('type',3)->where('status',1)->get(),
            'home_section_four' =>  CMS::where('page','home')->where('type',4)->where('status',1)->get(),
            'home_section_five' =>  CMS::where('page','home')->where('type',5)->where('status',1)->get(),
            'home_section_six' =>  CMS::where('page','home')->where('type',6)->where('status',1)->get(),
            'home_section_seven' =>  CMS::where('page','home')->where('type',7)->where('status',1)->get(),
            'home_section_eight' =>  CMS::where('page','home')->where('type',8)->first(),

            'featured_vehicles' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->where('is_featured',1)->get(),
        ];

        return view('home',$data);
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
