@extends('layouts.master')

@php
    $explodedName = explode(" ", $vehicle->name);
    $first = preg_replace('/\W\w+\s*(\W*)$/', '$1', $vehicle->name);
@endphp
<title>1937 Rentals | {{$first}} {{$explodedName[count($explodedName)-1]}}</title>

@section('top-styles')

<style>
    .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                left:40px;
                background-color:#25d366;
                color:#FFF;
                border-radius:50px;
                text-align:center;
              font-size:30px;
                box-shadow: 2px 2px 3px #999;
              z-index:100;
            }
            
            .my-float{
                margin-top:16px;
            }

             

            @media (min-width: 1200px) {
                .booking-form {
                    background: #1d181d;
                    border: 1px solid #000;
                    width: auto;
                    height: 300px;
                }  

                #description{
                    margin-top: -30rem;
                }

            }

            @media (max-width: 820px) {
                .booking-form {
                    background: #1d181d;
                    border: 1px solid #000;
                    width: auto;
                    
                    height: 820px;
                } 
                #description{
                    margin-top: -21rem;
                } 
                #pri{
                    margin-top: 23rem;
                }
            }
                #specs td, #specs th {
    border: 1px solid #000;
    padding: 8px;
    background-color: #1d181d;
    }

    #specs tr:hover {background-color: #fff;}

    
    [type="date"] {
    background:#fff url(https://cdn2.iconfinder.com/data/icons/flat-pack-1/64/Calendar-18.png)  97% 50% no-repeat ;
    }
    [type="time"] {
background:#fff url(https://cdn2.iconfinder.com/data/icons/flat-seo-web-ikooni/128/flat_seo3-21-24.png)  97% 50% no-repeat ;
}

[type="date"]::-webkit-inner-spin-button {
    display: none;
    }
    [type="date"]::-webkit-calendar-picker-indicator {
    opacity: 0;
    }
    [type="time"]::-webkit-inner-spin-button {
    display: none;
    }   
    [type="time"]::-webkit-calendar-picker-indicator {
    opacity: 0;
    }
</style>

@endsection

@section('content')

@php
    $explodedName = explode(" ", $vehicle->name);
    $first = preg_replace('/\W\w+\s*(\W*)$/', '$1', $vehicle->name);
@endphp
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>{{$first}}  <span> {{$explodedName[count($explodedName)-1]}}</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('all_vehicles')}}">All Vehicles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$vehicle->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="game-manage-area pt-150 pb-120">
    @if(isset($success))
    <div class="row success-msg">
        <div class="col-md-12 mb20">
            <h3 class="text-center" style="color:#E94C3D">THANK YOU!</h3>
            <h5 class="text-center">{{$success}}</h5>
        </div>
    </div>
    @endif
    <div class="container">
        <div class="section-title mb-20 text-center">
            <h2>Booking <span>Form</span> </h2>
        </div>
        <div class="booking-form mb-30">
            <form action="{{route('booking_form.store')}}" method="post">
                @csrf

                <div class="row" style="margin-left: 20px; margin-right: 20px;">
                    @if(isset($data['noOfDays']))
                        <style type="text/css">
                            @media (max-width: 820px) {
                .booking-form {
                    background: #1d181d;
                    border: 1px solid #000;
                    width: auto;
                    
                    height: 620px;
                }  
            }
                        </style>
                        <div class="col-md-12 custom-date mt5" style="font-size:12px">
                            <div class="row">
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> Start Date :</b> {{date('d-M-Y',strtotime($data['start_date']))}} &ensp;|&ensp;</span>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> End Date :</b> {{date('d-M-Y',strtotime($data['end_date']))}} &ensp;|&ensp;</span>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> Start Time :</b> {{date('h:i A',strtotime($data['start_time']))}} &ensp;|&ensp;</span>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> End Time :</b> {{date('h:i A',strtotime($data['end_time']))}} &ensp;|&ensp;</span>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> Days :</b> {{$data['noOfDays']}} &ensp;|&ensp;</span>
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <span> <b style="color: #E94C3D;"> Amount :</b> AED {{number_format($data['total_amount'])}}</span>
                                </div>
                            </div>

                            <input type="hidden" name="start_date" value="{{$data['start_date']}}">
                            <input type="hidden" name="end_date" value="{{$data['end_date']}}">
                            <input type="hidden" name="start_time" value="{{$data['start_time']}}">
                            <input type="hidden" name="end_time" value="{{$data['end_time']}}">
                            <input type="hidden" name="total_amount" value="{{$data['total_amount']}}">
                            <input type="hidden" name="no_of_days" value="{{$data['noOfDays']}}">
                        </div>
                    @else
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">Start Date</label>
                        <input required type="date" name="start_date" class="form-control" placeholder="Start Date">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">End Date</label>
                        <input required type="date" name="end_date" class="form-control" placeholder="End Date">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">Start Time</label>
                        <input required type="time" name="start_time" class="form-control" placeholder="Start Time">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">End Time</label>
                        <input required type="time" name="end_time" class="form-control" placeholder="End Time">
                    </div>
                    @endif
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">First Name</label>
                        <input required type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">Last Name</label>
                        <input required type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">Email</label>
                        <input required type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-3 custom-date mt5">
                        <label class="filter-label">Contact Number</label>
                        <input required type="text" name="contact_no" class="form-control" placeholder="Contact Number">
                    </div>
                    <input type="hidden" name="car_name" value="{{$vehicle->name}}">
                    <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                    <div class="col-md-12 text-center custom-date" style="margin-top: 35px;">
                        <button class="btn rotated-btn">Book Now</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
            
                <div class="product-slider-box clearfix mb-30">
                    <div class="product-img-slide">
                        <div class="slider-for">
                            @foreach($vehicle->gallery_images as $gallery)
                                <img src="{{config('1937rentals.file_path').$gallery->image}}" class="img-fluid w-100" alt="slider-car">
                            @endforeach
                            <!-- <img src="{{url('')}}/img/vehicle-image/AUDI R8 CABRIOLET/2b.jpg" class="img-fluid w-100" alt="slider-car">
                            <img src="{{url('')}}/img/vehicle-image/AUDI R8 CABRIOLET/2c.jpg" class="img-fluid w-100" alt="slider-car"> -->
                        </div>
                        <div class="slider-nav">
                            @foreach($vehicle->gallery_images as $gallery)
                                <div class="thumb-slide"><img src="{{config('1937rentals.file_path').$gallery->image}}" class="img-fluid" alt="small-car"></div>
                            @endforeach
                            <!-- <div class="thumb-slide"><img src="{{url('')}}/img/vehicle-image/AUDI R8 CABRIOLET/2b.jpg" class="img-fluid" alt="small-car"></div>
                            <div class="thumb-slide"><img src="{{url('')}}/img/vehicle-image/AUDI R8 CABRIOLET/2c.jpg" class="img-fluid" alt="small-car"></div> -->
                        </div>
                        
                    </div>
                </div>

                <div class="section-title mb-30" id="">
                    <div id="description">
                        <h3><span>DESCRIPTION</span></h3>
                        {!! $vehicle->description !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="section-title mb-20" id="pri">
                    <h2>AED <span>{{number_format($vehicle->price)}}</span> <small><small> / Day</small></small></h2>
                </div>
                <table id="specs">
                    @foreach($vehicle->features as $feature)
                        <tr>
                            <th><b>{{$feature->name}}</b></th>
                            @if($feature->name == 'Security Amount' || $feature->name == 'Price' || $feature->name == 'Deposit' )
                                <th>AED {{number_format($feature->value)}}</th>
                            @else
                                <th>{{$feature->value}}</th>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-2-html/HTML/main/js/slick.min.js"></script>
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-2-html/HTML/main/js/lightgallery-all.js"></script>
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-2-html/HTML/main/js/app.js"></script>
@endsection