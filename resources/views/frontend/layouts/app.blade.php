<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- dont touch this --}}
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/preloader.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/backToTop.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/elegantFont.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/default.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- Add your site or application content here -->

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content-2 text-center">
                    <img class="loading-logo-icon-2" src="{{ asset('frontend') }}/assets/img/logo/logo-icon.png"
                        alt="">
                    <img class="loading-logo-text-2" src="{{ asset('frontend') }}/assets/img/logo/logo-text-2.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    @include('frontend.layouts.partial.header')
    <!-- header area end -->

    @include('frontend.layouts.partial.cart-mini')

    <!-- sidebar area start -->
    @include('frontend.layouts.partial.sidebar-area')
    <!-- sidebar area end -->


    @yield('content')

    <!-- footer area start -->
    @include('frontend.layouts.partial.footer')
    <!-- footer area end -->
    <!-- JS here -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/parallax.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/backToTop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/purecounter.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
