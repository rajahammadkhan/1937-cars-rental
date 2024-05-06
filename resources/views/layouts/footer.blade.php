<footer>
    <div class="footer-top footer-bg s-footer-bg pt-80">
        <!-- newsletter-area-end -->
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="footer-logo mb-35">
                            <a href="{{route('home')}}"><img src="{{config('1937rentals.file_path').getSettings('site_logo_footer')}}" alt="" width="300px" height="100px"></a>
                        </div>
                        <div class="footer-text">
                            <p>{{getSettings('footer_about')}}</p>
                            <div class="fw-quick-link">
                            <ul>
                                <li><a href=""><i class="fas fa-map-marker-alt"></i>&emsp; {{getSettings('address')}}</a></li>
                                <li><a href="tel:{{getSettings('contact_no')}}"><i class="fas fa-phone"></i>&emsp; {{getSettings('contact_no')}}</a></li>
                                <li><a href="mailto:{{getSettings('site_email')}}"><i class="fa fa-envelope"></i>&emsp; {{getSettings('site_email')}}</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Our Vehicles</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                @foreach(getVehicleBrands() as $brand)
                                    <li><a href="{{route('get_vehicles_against_brand',$brand->slug)}}">{{strtoupper($brand->name)}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Quick Links</h5>
                        </div>
                        <div class="fw-link">
                            <ul>
                                <li><a href="{{route('about_us')}}">ABOUT US</a></li>
                                <li><a href="#">PRIVACY POLICY</a></li>
                                <li><a href="#">OUR GALLERY</a></li>
                                <li><a href="#">DONATIONS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Follow Us</h5>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="{{getSettings('social_facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{getSettings('social_twitter')}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{getSettings('social_pinterest')}}"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="{{getSettings('social_linkedin')}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widget mb-50">
                        <div class="fw-title mb-35">
                            <h5>Newsletter Sign Up</h5>
                        </div>
                        <div class="footer-newsletter">
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button><i class="fas fa-rocket"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer-fire"><img src="{{url('')}}/img/images/footer_fire.png" alt=""></div>
        <div class="footer-fire footer-fire-right"><img src="{{url('')}}/img/images/footer_fire.png" alt=""></div> -->
    </div>
    <div class="copyright-wrap s-copyright-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-text">
                        <p>Copyright © 2022 <a href="{{route('home')}}">1937 Car Rental</a> All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-md-block">
                    <div class="payment-method-img text-right">
                        <img src="{{url('')}}/img/images/card_img.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-area-end -->