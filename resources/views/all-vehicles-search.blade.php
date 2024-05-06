@extends('layouts.master')


@section('top-styles')

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>all <span>vehicles</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Vehicles</li>
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
        <div class="row justify-content-center">
            @foreach($vehicles as $vehicle)
            <div class="col-lg-4 col-md-6">
                        <form action="{{route('vehicles.form.post')}}" method="post">
                            @csrf
                        <div class="coming-match-item mb-30">
                            <div class="coming-match-team">
                                <div class="match-team-info">
                                    <div class="match-team-logo">
                                        <img src="{{config('1937rentals.file_path').$vehicle->featured_image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            @php
                                $totalAmount = $vehicle->price * $noOfDays; 
                            @endphp
                            <input type="hidden" name="total_amount" value="{{$totalAmount}}">
                            <input type="hidden" name="no_of_days" value="{{$noOfDays}}">
                            <input type="hidden" name="start_date" value="{{$start_date}}">
                            <input type="hidden" name="end_date" value="{{$end_date}}">
                            <input type="hidden" name="start_time" value="{{$start_time}}">
                            <input type="hidden" name="end_time" value="{{$end_time}}">
                            <input type="hidden" name="vehicle_id" value="{{$vehicle->id}}">
                            <div class="coming-match-info">
                                <h5>{{strtoupper($vehicle->name)}}</h5>
                                <div class="match-rating">
                                    <p>Days : <span> {{$noOfDays}}</span> &emsp; | &emsp; Price : <span> AED {{number_format($totalAmount)}}</span></p>
                                </div>
                                <div class="match-info-action">
                                    <button href="" class="btn transparent-btn2 form-post">Book Now</button>
                                    <a href="https://api.whatsapp.com/send?phone=+971 50 807 3737" target="_blank" class="btn transparent-btn"><i class="fab fa-whatsapp"></i> Chat</a>
                                </div>
                            </div>
                            <div class="coming-match-time">
                                <div class="coming-time" data-countdown="2021/3/15">
                                    @foreach($vehicle->features as $feature)
                                        <div class="time-count">
                                            <span>{{$feature->value}}</span>{{$feature->name}}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
            @endforeach

            </div>
    </div>
</section>

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection