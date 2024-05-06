@extends('layouts.master')

@section('title')@if(request()->segment(2)) {{$meta_title}} | @endif @endsection
@section('description')@if(request()->segment(2)) {{$meta_description}}@endif @endsection
@section('keywords')@if(request()->segment(2)) {{$keywords}}@endif @endsection

@section('top-styles')

@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    @if(isset($brand_name))
                        <h2>{{$brand_name}}</h2>
                    @else
                        <h2>all <span>vehicles</span></h2>
                    @endif
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$brand_name ?? 'All Vehicles'}}</li>
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
                    <div class="coming-match-item mb-30">
                        <div class="coming-match-team">
                            <div class="match-team-info">
                                <div class="match-team-logo">
                                    <a href="{{route('vehicle_detail',$vehicle->slug)}}"><img src="{{config('1937rentals.file_path').$vehicle->featured_image}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="coming-match-info">
                            <h5>{{strtoupper($vehicle->name)}}</h5>
                            <div class="match-rating">
                                <h5>Per Day &emsp; | &emsp; <span> AED {{number_format($vehicle->price)}}</span></h5>
                            </div>
                            <div class="match-info-action">
                                <a href="{{route('vehicle_detail',$vehicle->slug)}}#booking-form" class="btn transparent-btn2">Book Now</a>
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