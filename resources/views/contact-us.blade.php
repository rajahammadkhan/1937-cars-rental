@extends('layouts.master')

@section('title', 'Contact Us')

@section('top-styles')

@endsection

@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>contact <span>us</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="contact-area third-contact-bg">
    <div class="container custom-container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="third-contact-wrap">
                    <iframe src="{{getSettings('google_location')}}" width="700" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title mb-20">
                    <h2>CONTACT <span> US</span></h2>
                </div>
                <div class="fw-quick-link mb-40">
                    <ul>
                    <li><a href=""><i class="fas fa-map-marker-alt"></i>&emsp; {{getSettings('address')}}</a></li>
                    <li><a href="tel:{{getSettings('contact_no')}}"><i class="fas fa-phone"></i>&emsp; {{getSettings('contact_no')}}</a></li>
                    <li><a href="mailto:{{getSettings('site_email')}}"><i class="fa fa-envelope"></i>&emsp; {{getSettings('site_email')}}</a></li>
                    </ul>
                </div>
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

@endsection