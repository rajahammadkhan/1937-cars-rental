@extends('layouts.master')
@section('title', 'Home')


@section('top-styles')

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>about <span>us</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                <div class="inner-about-img">
                    <img src="{{config('1937rentals.file_path').$about_section_one->image_one}}" class="wow fadeInRight" data-wow-delay=".3s" alt="">
                    <img src="{{config('1937rentals.file_path').$about_section_one->image_two}}" class="wow fadeInLeft" data-wow-delay=".6s" alt="">
                    <img src="{{config('1937rentals.file_path').$about_section_one->heading_one}}" class="wow fadeInUp" data-wow-delay=".6s" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                {!! $about_section_one->description_one !!}
            </div>
        </div>
    </div>
    <!-- <div class="inner-about-shape"><img src="img/images/medale_shape.png" alt=""></div> -->
</section>
<!-- inner-about-area-end -->

<!-- latest-match-area -->
<section class="latest-match-area latest-match-bg pt-115 pb-90">
    <div class="container">
    <div class="see-my-info-wrap">
                        <div class="row">
                            <div class="col-12">
                                <div class="third-section-title text-center mb-75">
                                    <h2>Why <span>Choose</span> Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @foreach($about_section_two as $value)
                                <div class="col-xl-4">
                                    <div class="my-info-box mb-30">
                                        <div class="my-info-box-top">
                                            <h6>{{$value->heading_one}}</h6>
                                            <img src="img/bg/my_info_box_hover.png" alt="" class="">
                                        </div>
                                        <div class="my-info-box-content">
                                            <div class="my-clan-wrap">
                                                <div class="clan-logo">
                                                    <img src="{{config('1937rentals.file_path').$value->image_one}}" alt="">
                                                </div>
                                                <div class="my-clan-info">
                                                    <span>{{$value->description_one}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
    </div>
</section>
<!-- latest-match-area-end -->

<!-- features-area -->
<section class="features-area features-bg pt-80 pb-30">
                <div class="container">
                    
                    <div class="fact-area">
                        <div class="row justify-content-center">
                            @foreach($about_section_three as $value)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="fact-item">
                                        <div class="fact-icon">
                                            <img src="{{config('1937rentals.file_path').$value->image_one}}" alt="">
                                        </div>
                                        <div class="fact-content">
                                            <h2><span class="odometer" data-count="{{$value->heading_one}}">00</span></h2>
                                            <span>{{$value->heading_two}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- features-area-end -->

            <!-- my-match-area -->
            <section class="my-match-area my-match-bg pb-120">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">    
                            <div class="third-section-title text-center mb-75">
                                <h2>Our <span>Testimonials</span></h2>
                            </div>
                        </div>
                    </div>
                    @foreach($about_section_four as $value)
                        <div class="row">
                            <div class="col-12">
                                <div class="my-match-wrap">
                                    <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".2s">
                                        <img src="img/bg/my_match_box.png" alt="" class="match-box-bg">
                                        <ul>
                                            <li>
                                                <div class="my-match-team">
                                                    <div class="team-one">
                                                        <a href="#"><img src="{{config('1937rentals.file_path').$value->image_one}}" alt=""></a>
                                                    </div>
                                                    <div class="vs">
                                                        <p><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span></p>
                                                        <span class="testimonial-name">{{$value->heading_one}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my-match-info">
                                                    {!! $value->heading_two !!}
                                                </div>
                                            </li>
                                            <!-- <li>
                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><i class="fas fa-podcast"></i> watch stream</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".4s">
                                        <img src="img/bg/my_match_box.png" alt="" class="match-box-bg">
                                        <ul>
                                            <li>
                                                <div class="my-match-team">
                                                    <div class="team-one">
                                                        <a href="#"><img src="img/images/testimonial-img1.png" alt=""></a>
                                                    </div>
                                                    <div class="vs">
                                                        <p><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span></p>
                                                        <span class="testimonial-name">Saeed al harthi</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my-match-info">
                                                    <p>Came for a holiday from saudi Great service by the team, car was great would definitely recommend.</p>
                                                    <span>Thanks</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".6s">
                                        <img src="img/bg/my_match_box.png" alt="" class="match-box-bg">
                                        <ul>
                                            <li>
                                                <div class="my-match-team">
                                                    <div class="team-one">
                                                        <a href="#"><img src="img/images/testimonial-img1.png" alt=""></a>
                                                    </div>
                                                    <div class="vs">
                                                        <p><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span></p>
                                                        <span class="testimonial-name">Lisa alikova</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my-match-info">
                                                    <p>I didn’t know renting supercars was this easy, mr abdulla gave us a good deal on the pricing, I enjoyed a lot.</p>
                                                    <span>Thanks</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- my-match-area-end -->

            <!-- brand-area -->
            <div class="brand-area t-brand-bg">
                <div class="container custom-container">
                    <div class="row s-brand-active">
                        @foreach($brands as $brand)
                            <div class="col-12">
                                <div class="t-brand-item">
                                    <img src="{{config('1937rentals.file_path').$brand->logo}}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

@endsection

@section('bottom-mid-scripts')

@endsection

@section('bottom-bot-scripts')

@endsection