@extends('layouts.master')

@section('top-styles')
      <link rel="stylesheet" href="{{url('')}}/css/custom/main.css">
      <link rel="stylesheet" href="{{url('')}}/css/custom/responsive.css">
      <link rel="stylesheet" href="{{url('')}}/plugins/slick/slick.css">
      <link rel="stylesheet" href="{{url('')}}/plugins/slick/slick-theme.css">
<style>
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 5px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #000;
  font-family: 'Oxanium', cursive;
  padding: 0px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: -2px;
  right: 0;
  z-index: 99;
  width: 282px;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.checked {
  color: #E94C3D;
}

#myVideo {
    width: 100vw;
    height: 130vh;
  object-fit: cover;
  position: fixed;
  left: 0;
  right: 0;
  top: -80px;
  bottom: 0;
  z-index: -1;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

.filter-label{
    color: white;
}

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
    

    @media (min-width: 1200px) {
        .head1{
            margin-left: -40px;
        }
        .head2{
            margin-left: 200px;
        }
        .head3{
            margin-left: -50px;
        }
        #head4{
            margin-left: -62px;
        }
        .head5{
            margin-left: 158px;
        }

    }

    @media (max-width: 820px) {
        .head1{
            vertical-align: center;
        }
        .head2{
            margin-left: 160px;
        }
        .head3{
            margin-left: 20px;
        }
        #head4{
            margin-left: -5px;
        }
        .head5{
            margin-left: 130px;
        }

        .filter-res{
            margin-left: 15px;
            margin-top: 20px;
        }

    }


</style>
@endsection

@section('content')

<video autoplay muted loop id="myVideo">
  <source src="{{config('1937rentals.file_path').$video_section->image_one}}" type="video/mp4">
</video>
<!-- <iframe id="myVideo" src="https://www.youtube.com/embed/ijE2MMtzkHg?playlist=ijE2MMtzkHg&loop=1&controls=0&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
<!-- slider-area -->
<section class="slider-area slider-bg">
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
        <form action="{{route('vehicles.search')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-xl-8">
                    <div class="slider-content head1">
                        <h6 class="wow fadeInDown head2" data-wow-delay=".2s">1937</h6>
                        <h2 class="tlt fix head3" data-in-effect="fadeInLeft">Car <span>Rental</span></h2>
                        <p class="wow fadeInUp text-center" id="head4" data-wow-delay="2s">Dubai's Best Exotic And Luxury Car Rental, Find The Car Of Your Dreams.</p>
                        <a href="#" class="btn rotated-btn wow fadeInUp head5" data-wow-delay="2.2s">READ MORE</a>
                    </div>
                </div>
                <div class="col-xl-1"></div>
                
                    <div class="col-xl-3 filter-res">
                        <div class="first">
                            <div class="row">
                                <div class="custom-date mt5 mr12" >
                                    <label class="filter-label">Start Date</label>
                                    <input type="date" name="start_date" value="02/07/2022" class="form-control datepkr" data-date-inline-picker="true" style="width:280px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="custom-date mt5 mr12" >
                                    <label class="filter-label">End Date</label>
                                    <input type="date" name="end_date" value="" class="form-control datepkr" data-date-inline-picker="true" style="width:280px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="custom-date mt5 mr12" >
                                    <label class="filter-label">Start Time</label>
                                    <input type="time" name="start_time" value="" class="form-control datepkr" data-date-inline-picker="true" style="width:280px;">
                                </div>
                            </div>
                            <div class="row">
                                <div class="custom-date mt5 mr12" >
                                    <label class="filter-label">End Time</label>
                                    <input type="time" name="end_time" value="" class="form-control datepkr" data-date-inline-picker="true" style="width:280px;">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="mt5 mb20">
                                    <button class="btn rotated-btn ">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>
        </form>
    </div>
</section>
<!-- slider-area-end -->

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

            <!-- third-about-area -->
            <section class="third-about-area third-about-bg pt-120 pb-90" style="background-image: url(../img/bg/third_about_bg.jpg);">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="third-about-img text-right position-relative">
                                <img src="{{config('1937rentals.file_path').$home_section_two->image_two}}" class="main-img" alt="">
                                <!-- <img src="img/images/third_about_img_shadow.png" class="shadow" alt=""> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="third-about-content">
                                <div class="third-title-style">
                                    {!! $home_section_two->description_one !!}
                                    <a href="#" class="btn rotated-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="see-my-info-wrap pt-120">
                        <div class="row">
                            <div class="col-12">
                                <div class="third-section-title text-center mb-75">
                                    <h2>Why <span>Choose</span> Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            @foreach($home_section_three as $value)
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
            <!-- third-about-area-end -->

            <!-- game-gallery-area -->
            <div class="game-gallery-area position-relative">
                <div class="game-gallery-bg"></div>
                <div class="container-fluid p-0 fix">
                    <div class="row game-gallery-active">
                        @foreach($home_section_four as $value)
                            <div class="col-12">
                                <div class="game-gallery-item">
                                    <img src="{{config('1937rentals.file_path').$value->image_one}}" alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="slider-nav"></div>
            </div>
            <!-- game-gallery-area-end -->

            <!-- game-manage-area -->
            <section class="game-manage-area game-mange-bg pt-150 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8">
                            <div class="section-title third-section-title text-center mb-60">
                                <!-- <span>COME THE END OF THE WORLD</span> -->
                                <h2>Our <span>Vehicles</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($featured_vehicles as $vehicle)
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
                                            <h5 style="font-size: 17px">Was &emsp; | &emsp; <span> AED {{number_format($vehicle->price + 300)}}</span></h5>
                                            <h5>Now Per Day &emsp; | &emsp; <span> AED {{number_format($vehicle->price)}}</span></h5>
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
                        <a href="{{route('all_vehicles')}}" class="btn rotated-btn">View More</a>
                    </div>
                </div>
            </section>
            <!-- game-manage-area-end -->

            <!-- features-area -->
            <section class="features-area features-bg pt-80 pb-30">
                <div class="container">
                    
                    <div class="fact-area">
                        <div class="row justify-content-center">
                            @foreach($home_section_five as $value)
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

            <section class="section-goods-slider bg-dark">
        <div class="section-goods-slider__inner">
          <div class="ui-decor ui-decor_center bg-primary"></div>
          <div class="container">
            <div class="text-center">
              <div class="ui-title-logo ui-title-logo_dark">1937</div>
              <div class="section-title third-section-title text-center mb-60">
                    <!-- <span>COME THE END OF THE WORLD</span> -->
                    <h2>Hot <span>Deals</span></h2>
                </div>
              <div class="b-goods-slider-2 js-slider" data-slick="{&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2, &quot;dots&quot;: true, &quot;arrows&quot;: false, &quot;autoplay&quot;: true,   &quot;responsive&quot;: [{&quot;breakpoint&quot;: 992, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1}}]}">
                @foreach($home_section_six as $deal)
                    <div class="b-goods-2">
                        <div class="b-goods-2__img"><img class="img-fluid" src="{{config('1937rentals.file_path').$deal->image_one}}" width="480px" height="260px" alt="photo"/></div>
                        <div class="b-goods-2__main">
                        <div class="row justify-content-between align-items-baseline">
                            <div class="col-auto pt-20">
                            <h3>{{$deal->heading_one}}</h3>
                            </div>
                            <div class="col-auto">
                            <div class="b-goods-2__price">
                                <h3 style="color: #E94C3D;">AED <span>{{number_format($deal->heading_two)}}</span></h3>
                            </div>
                            </div>
                        </div>
                        <div class="b-goods-2-descrip">
                            <div class="b-goods-2-descrip__item">
                            <div class="b-goods-2-descrip__inner">
                                <div class="b-goods-2-descrip__wrap"><span id="days0">00</span> Days</div>
                            </div>
                            </div>
                            <div class="b-goods-2-descrip__item">
                            <div class="b-goods-2-descrip__inner">
                            <div class="b-goods-2-descrip__wrap"><span id="hours0">00</span> Hours</div>
                            </div>
                            </div>
                            <div class="b-goods-2-descrip__item">
                            <div class="b-goods-2-descrip__inner">
                            <div class="b-goods-2-descrip__wrap"><span id="minutes0">00</span> Minutes</div>
                            </div>
                            </div>
                            <div class="b-goods-2-descrip__item">
                            <div class="b-goods-2-descrip__inner">
                            <div class="b-goods-2-descrip__wrap"><span id="seconds0">00</span> Seconds</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
                
              </div>
              
            </div>
          </div>
        </div>
      </section>

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
                    <div class="row">
                        <div class="col-12">
                            <div class="my-match-wrap">
                                @foreach($home_section_seven as $testimonial)
                                    <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".2s">
                                        <img src="img/bg/my_match_box.png" alt="" class="match-box-bg">
                                        <ul>
                                            <li>
                                                <div class="my-match-team">
                                                    <div class="team-one">
                                                        <a href="#"><img src="{{config('1937rentals.file_path').$testimonial->image_one}}" alt=""></a>
                                                    </div>
                                                    <div class="vs">
                                                        <p><span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span></p>
                                                        <span class="testimonial-name">{{$testimonial->heading_one}}</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="my-match-info">
                                                    <!-- <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a> -->
                                                    {!! $testimonial->heading_two !!}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- my-match-area-end -->

            <!-- donation-area -->
            <section class="donation-area donation-bg fix pt-65">
                <div class="container custom-container">
                    <div class="donation-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7">
                                <div class="donation-content">
                                    <div class="third-title-style">
                                        {!! $home_section_eight->description_one !!}
                                        <a href="#" class="btn rotated-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5">
                                <div class="donation-img text-center">
                                    <img src="{{config('1937rentals.file_path').$home_section_eight->image_one}}" class="main-img" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- donation-area-end -->

            <!-- team-area -->
            <!-- <section class="team-area team-bg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="third-section-title text-center mb-60">
                                <h2>MEET <span>OUR</span> TEAM</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="third-team-item text-center mb-30">
                                <div class="third-team-img">
                                    <img src="img/team/team_img01.png" alt="">
                                </div>
                                <div class="third-team-content">
                                    <div class="main-bg"></div>
                                    <div class="hover-bg"></div>
                                    <h5><a href="#">Jannie Visscher</a></h5>
                                    <span>weapon master</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="third-team-item text-center mb-30">
                                <div class="third-team-img">
                                    <img src="img/team/team_img02.png" alt="">
                                </div>
                                <div class="third-team-content">
                                    <div class="main-bg"></div>
                                    <div class="hover-bg"></div>
                                    <h5><a href="#">warren buffett</a></h5>
                                    <span>team leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="third-team-item text-center mb-30">
                                <div class="third-team-img">
                                    <img src="img/team/team_img03.png" alt="">
                                </div>
                                <div class="third-team-content">
                                    <div class="main-bg"></div>
                                    <div class="hover-bg"></div>
                                    <h5><a href="#">anne hathaway</a></h5>
                                    <span>weapon master</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="third-team-item text-center mb-30">
                                <div class="third-team-img">
                                    <img src="img/team/team_img04.png" alt="">
                                </div>
                                <div class="third-team-content">
                                    <div class="main-bg"></div>
                                    <div class="hover-bg"></div>
                                    <h5><a href="#">poll worker</a></h5>
                                    <span>team member</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- team-area-end -->

            <!-- contact-area -->
            <section class="contact-area third-contact-bg">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="third-contact-wrap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.747953978321!2d55.27192611544868!3d25.17798703865741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6920e3178097%3A0xcfd9d03021a93859!2sCapital%20Golden%20Tower!5e0!3m2!1sen!2s!4v1645267117012!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="third-contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Your Phone">
                                    </div>
                                </div>
                                <textarea name="message" id="message" placeholder="Wight Message"></textarea>
                                <button class="btn rotated-btn">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

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
<script src="{{url('')}}/js/custom.js"></script>
<script src="{{url('')}}/plugins/slick/slick.js"></script>
<script>

var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}

var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "02/26/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days0").innerText = Math.floor(distance / (day)),
          document.getElementById("hours0").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes0").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds0").innerText = Math.floor((distance % (minute)) / second);
        //seconds
      }, 0)
  }());

(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "02/28/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days1").innerText = Math.floor(distance / (day)),
          document.getElementById("hours1").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes1").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds1").innerText = Math.floor((distance % (minute)) / second);
        //seconds
      }, 0)
  }());
</script>
@endsection