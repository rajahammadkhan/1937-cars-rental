<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
      $route = Route::getCurrentRoute()->getName();
      $currentMenu = getCurrentMenu($route);

      if($currentMenu == null){
        $explodedPath = explode('/',Request::getPathInfo());
        
      }

      if($route == 'more_info'){
        $name = 'More Information';
      }else{
        $name = 'Blogs';
      }
        $abc= '1937 Car Rental'
    @endphp
    
    <title>@yield('title'){{$currentMenu->meta_title ?? $currentService->meta_title ?? $currentBlog->meta_title ?? $blog->meta_title ??  $abc ?? null}}</title>


  <meta name="description" content="@yield('description'){{$currentMenu->meta_description ?? $currentService->meta_description ?? $currentBlog->meta_description ?? null}}">
  <meta name="keywords" content="@yield('keywords'){{$currentMenu->keywords ?? $currentService->keywords ?? $currentBlog->keywords ?? null}}">
  
		<link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{url('')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{url('')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{url('')}}/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="{{url('')}}/css/odometer.css">
        <link rel="stylesheet" href="{{url('')}}/css/aos.css">
        <link rel="stylesheet" href="{{url('')}}/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('')}}/css/meanmenu.css">
        <link rel="stylesheet" href="{{url('')}}/css/slick.css">
        <link rel="stylesheet" href="{{url('')}}/css/default.css">
        <link rel="stylesheet" href="{{url('')}}/css/style.css">
        <link rel="stylesheet" href="{{url('')}}/css/responsive.css">
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

            }

            @media (max-width: 820px) {
                .booking-form {
                    background: #1d181d;
                    border: 1px solid #000;
                    width: auto;
                    
                    height: 820px;
                }  
            }
            
            
        </style>

        @yield('top-styles')
    </head>
    <body style="background-color:#1c1f26;">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=+971 50 807 3737" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
        <!-- preloader -->
        <!-- <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/icon/preloader.svg" alt="">
                </div>
            </div>
        </div> -->
        <!-- preloader-end -->

        @section('header')
            @include('layouts/header')
        @show

        <!-- main-area -->
        <main>

            @yield('content')

        </main>
        <!-- main-area-end -->

        
        @section('footer')
            @include('layouts/footer')
        @show

		<!-- JS here -->
        <script src="{{url('')}}/js/vendor/jquery-3.4.1.min.js"></script>
        <script src="{{url('')}}/js/popper.min.js"></script>
        <script src="{{url('')}}/js/bootstrap.min.js"></script>
        <script src="{{url('')}}/js/isotope.pkgd.min.js"></script>
        <script src="{{url('')}}/js/slick.min.js"></script>
        <script src="{{url('')}}/js/jquery.meanmenu.min.js"></script>
        <script src="{{url('')}}/js/wow.min.js"></script>
        <script src="{{url('')}}/js/aos.js"></script>
        <script src="{{url('')}}/js/jquery.lettering.js"></script>
        <script src="{{url('')}}/js/jquery.textillate.js"></script>
        <script src="{{url('')}}/js/jquery.odometer.min.js"></script>
        <script src="{{url('')}}/js/jquery.appear.js"></script>
        <script src="{{url('')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('')}}/js/jquery.countdown.min.js"></script>
        <script src="{{url('')}}/js/jquery.scrollUp.min.js"></script>
        <script src="{{url('')}}/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{url('')}}/js/jquery.magnific-popup.min.js"></script>
        <script src="{{url('')}}/js/plugins.js"></script>
        <script src="{{url('')}}/js/main.js"></script>

        <script>
            $(document).ready(function(){
                setTimeout(() => {
                    $('.success-msg').slideUp();
                }, 5000);
            });
        </script>

        @yield('bottom-bot-scripts')
    </body>
</html>
