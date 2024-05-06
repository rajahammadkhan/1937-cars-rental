<!-- header-area -->
<style type="text/css">
        @media (min-width: 1200px) {
        .sticky-menu{
            position: fixed;
        }
    }
    @media (max-width: 575px) {
        .sticky-menu{
            position: none;
        }
    }
</style>
<header class="third-header-bg">
    <div class="bg"></div>
    <div class="container custom-container">
        <div class="header-top-area t-header-top-area d-none d-lg-block">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-top-social">
                            <a href="tel:{{getSettings('contact_no')}}" class="btn-header-contact" style="color: white; font-weight:600;">{{getSettings('contact_no')}}</a>&emsp;
                            <a href="https://api.whatsapp.com/send?phone={{getSettings('contact_no')}}" target="_blank" class="btn-header-whatsApp" style="color: white; font-weight:600;"><i class="fa fa-whatsapp"></i> &nbsp; CHAT NOW</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="header-top-login">
                        <ul>
                            <li style="font-family: 'Oxanium', cursive; font-weight: 700; line-height: 2;"><i class="fas fa-map-marker-alt"></i>&emsp; {{getSettings('address')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu menu-style-two">
                        <nav>
                            <div class="logo d-block d-lg-none res-logo">
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{config('1937rentals.file_path').getSettings('header_image')}}" alt="Logo" width="240px" height="70px"></a><br>
                                </div>
                                <div class="header-top-social" style="margin-top: 15px; margin-left:40px;">
                                    <a href="tel:{{getSettings('contact_no')}}" class="btn-header-contact" style="color: white;"><i class="fa fa-phone"></i> &nbsp; {{getSettings('contact_no')}}</a><br><br>
                                    <a href="https://api.whatsapp.com/send?phone={{getSettings('contact_no')}}" target="_blank" class="btn-header-whatsApp" style="color: white;"><i class="fa fa-whatsapp"></i> &nbsp; CHAT NOW</a>
                    </div>
                            </div>
                            <div class="navbar-wrap d-none d-lg-flex">
                                <ul class="left">
                                    <li><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('about_us')}}">About Us</a></li>
                                    <li><a href="{{route('all_vehicles')}}">All Vehicles</a>
                                        <ul class="submenu">
                                            @foreach(getVehicleBrands() as $brand)
                                                <li><a href="{{route('get_vehicles_against_brand',$brand->slug)}}">{{$brand->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                                <div class="logo">
                                    <a href="{{route('home')}}"><img src="{{config('1937rentals.file_path').getSettings('site_logo_header')}}" alt="Logo"></a>
                                </div>
                                <ul class="right">
                                    
                                    <li><a href="{{route('our_services')}}">Our Services</a></li>
                                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                                    <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="mobile-menu-wrap d-block d-lg-none">
                        <nav>
                            <div id="mobile-menu" class="navbar-wrap">
                                <ul>
                                <li class="show"><a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li><a href="{{route('about_us')}}">About Us</a></li>
                                    <li><a href="{{route('all_vehicles')}}">All Vehicles</a>
                                        <ul class="submenu">
                                            @foreach(getVehicleBrands() as $brand)
                                                <li><a href="{{route('get_vehicles_against_brand',$brand->slug)}}">{{$brand->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('our_services')}}">Our Services</a></li>
                                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                                    <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-bg"></div>
</header>
<!-- header-area-end -->