@extends('layouts.master')

@section('title', 'Our Services')

@section('top-styles')

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>our <span>services</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- inner-about-area -->
<section class="inner-about-area fix">
    <div class="container">
        @foreach($services as $key => $service)
            @if($key % 2 == 0)
            <div class="row">
                
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title mb-25 ml10">
                        <h2>DESERT <span>SAFARI</span></h2>
                    </div>
                    <div class="inner-about-content ml10">
                        <p>We have a team To assist you with desert safari packages offer entertainment and has proven to be excellent in services and capturing the hearts of our valuable guests. It provides guests a fun and thrilling experience in the desert, For bookings and other enquiries, feel free to get in touch with us.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="img">
                        <img src="img/images/desert-safari.jpg" class="wow fadeInLeft" data-wow-delay=".3s" alt="">
                    </div>
                </div>
            </div>
            <hr>
            @else

            <div class="row">
                
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title mb-25">
                        <h2>HOTEL <span>BOOKING</span></h2>
                    </div>
                    <div class="inner-about-content">
                        <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean
                        ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>
                        <p>Compete with 100 players on a remote Lorem Ipsn gravida. Pro ain gravida nibh vel velit an auctor aliqueenean
                        ollicitudin ain gravida nibh vel version an ipsum. Lorem Ipsn gravida. Pro ain gravida nibh vevelit auctor aliqueenean ollicitudin ain gravida nibh vel version an ipsum.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="img">
                        <img src="img/images/hotel-booking.jpg" class="wow fadeInRight" data-wow-delay=".3s" alt="">
                    </div>
                </div>
            </div>
            <hr>
            @endif
        @endforeach
        
    </div>
    <!-- <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div> -->
</section>
<!-- inner-about-area-end -->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection