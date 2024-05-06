<?php

namespace App\Http\Controllers;

use App\Mail\BookingMail;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DateTime;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AllVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $data['vehicles'] = Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->get();

        return view('all-vehicles',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVehicleAgainstBrand($slug)
    {
        $brand = Brand::where('slug',$slug)->first();

        $data = [
            'vehicles' => Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('brand_id',$brand->id)->where('status',1)->get(),

            'brand_name'            =>  $brand->name,
            'meta_title'            =>  $brand->meta_title,
            'meta_description'      =>  $brand->meta_description,
            'keywords'              =>  $brand->keywords,
        ];

        return view('all-vehicles',$data);
    }

    public function search(Request $request)
    {
        // return $request;
        $earlier = new DateTime($request->start_date);
        $later = new DateTime($request->end_date);

        $abs_diff = $later->diff($earlier)->format("%a");

        $data = [
            'noOfDays'      =>  $abs_diff+1,
            'start_date'    =>  $request->start_date,
            'end_date'    =>  $request->end_date,
            'start_time'    =>  $request->start_time,
            'end_time'    =>  $request->end_time,
            'vehicles'  =>  Vehicle::with(['features' => function($query){
                $query->where('is_featured',1);
            }])->where('status',1)->get(),
        ];

        // return $abs_diff+1;

        return view('all-vehicles-search',$data);
    }

    public function post(Request $request)
    {
        // return $request;
        $earlier = new DateTime($request->start_date);
        $later = new DateTime($request->end_date);

        $abs_diff = $later->diff($earlier)->format("%a");

        $vehicle = Vehicle::with('features','gallery_images')->where('id',$request->vehicle_id)->first();

        $data = [
            'noOfDays'      =>  $abs_diff+1,
            'start_date'    =>  $request->start_date,
            'end_date'    =>  $request->end_date,
            'start_time'    =>  $request->start_time,
            'end_time'    =>  $request->end_time,
            'total_amount'    =>  $request->total_amount,
        ];

        return view('vehicle-detail',['vehicle' => $vehicle],['data' => $data]);

        // return redirect()->route('vehicle_detail',$data['vehicle']->slug)->with(['data' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $data['vehicle'] = Vehicle::with('features','gallery_images')->where('slug',$slug)->first();

        return view('vehicle-detail',$data);
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
        $vehicle    =   Vehicle::where('id',$request->vehicle_id)->first();

        if(isset($request->no_of_days)){
            $noOfDays   =   $request->no_of_days;
            $totalAmount = $request->total_amount;
        }else{
            $earlier = new DateTime($request->start_date);
            $later = new DateTime($request->end_date);

            $abs_diff = $later->diff($earlier)->format("%a");
            $noOfDays   =   $abs_diff+1;
            $totalAmount = $vehicle->price * $noOfDays;
        }

        $booking                =   new Booking;
        $booking->vehicle_id    =   $request->vehicle_id;
        $booking->start_date    =   $request->start_date;
        $booking->end_date      =   $request->end_date;
        $booking->start_time    =   $request->start_time;
        $booking->end_time      =   $request->end_time;
        $booking->no_of_days    =   $noOfDays;
        $booking->total_amount  =   $totalAmount;
        $booking->car_name      =   $request->car_name;
        $booking->first_name    =   $request->first_name;
        $booking->last_name     =   $request->last_name;
        $booking->email         =   $request->email;
        $booking->contact_no    =   $request->contact_no;
        $booking->save();

        // return "adasd";

        Mail::to('booking@1937rentals.ae')->send(new BookingMail($booking));

        return view('vehicle-detail',['vehicle' => $vehicle],['success' => 'YOUR REQUEST FOR VEHICLE BOOKING HAS BEEN SUBMITTED SUCCESSFULLY']);
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
