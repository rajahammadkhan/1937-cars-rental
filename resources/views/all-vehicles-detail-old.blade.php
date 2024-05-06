@extends('layouts.master')

@section('title', 'All Vehicles')

@section('top-styles')

<style>
    #specs td, #specs th {
    border: 1px solid #000;
    padding: 8px;
    background-color: #1d181d;
    }

    #specs tr:hover {background-color: #fff;}
</style>

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>AUDI R8<span> SPYDER</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('all_vehicles')}}">All Vehicles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">AUDI R8 SPYDER</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="game-manage-area pt-150 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            
                <div class="product-slider-box clearfix mb-30">
                    <div class="product-img-slide">
                        <div class="slider-for">
                            <img src="{{url('')}}/img/images/listing-img1.png" class="img-fluid w-100" alt="slider-car">
                             <img src="{{url('')}}/img/images/listing-img1.png" class="img-fluid w-100" alt="slider-car">
                        </div>
                        <div class="slider-nav">
                            <div class="thumb-slide"><img src="{{url('')}}/img/images/listing-img1.png" class="img-fluid" alt="small-car"></div>
                            <div class="thumb-slide"><img src="{{url('')}}/img/images/listing-img1.png" class="img-fluid" alt="small-car"></div>
                        </div>
                    </div>
                </div>

                <div class="section-title mb-30">
                    <h3><span>DESCRIPTION</span></h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="section-title mb-20">
                    <h2>AED <span>3,500</span> <small><small> / Day</small></small></h2>
                </div>
                <table id="specs">
                    <tr>
                        <th><b>Engine</b></th>
                        <th>V8</th>
                    </tr>
                    <tr>
                        <th><b>Seats</b></th>
                        <th>5</th>
                    </tr>
                    <tr>
                        <th><b>Doors</b></th>
                        <th>4</th>
                    </tr>
                    <tr>
                        <th><b>Luggage</b></th>
                        <th>2</th>
                    </tr>
                    <tr>
                        <th><b>Free Pickup-Drop Off</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>AUX</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>USB</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Cruise Control</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Bluetooth</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Automatic</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Parking Sensor</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Navigation</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Full Insurance</b></th>
                        <th>Yes</th>
                    </tr>
                    
                    <tr>
                        <th><b>Security Type</b></th>
                        <th>Card Only</th>
                    </tr>
                    <tr>
                        <th><b>Payment Type</b></th>
                        <th>Credit Card & Cash</th>
                    </tr>
                    <tr>
                        <th><b>Free Cancellation</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>24/7 Customer Service</b></th>
                        <th>Yes</th>
                    </tr>
                    <tr>
                        <th><b>Mileage Daily</b></th>
                        <th>KM250</th>
                    </tr>
                    <tr>
                        <th><b>Price</b></th>
                        <th>AED 4,500</th>
                    </tr>
                    <tr>
                        <th><b>Deposit</b></th>
                        <th>AED 5,000</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-html/HTML/main/js/slick.min.js"></script>
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-html/HTML/main/js/lightgallery-all.js"></script>
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-html/HTML/main/js/app.js"></script>
@endsection