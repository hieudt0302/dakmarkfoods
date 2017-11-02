<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}">
    
    <!-- CSS -->        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vertical-rhythm.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}">
    
</head>
<body>

    <!-- Page Loader -->        
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->

    <!-- Page Wrap -->
    <div class="page" id="top">

        <!-- SITE SEARCH OVERLAY -->
        <div id="full-screen-search">
            <button type="button" class="close">×</button>
            {!! Form::open(array('url' => '/search')) !!}
                <div class="seach-input">
                    <input type="text" class="search" id="s" name="key" placeholder="@lang('header.enter-keyword')" autofocus="autofocus">
                </div>
            {!! Form::close() !!}
        </div>
        <!-- END SITE SEARCH OVERLAY -->

        <!-- Navigation panel -->
        @include('layouts.nav')
        <!-- End Navigation panel -->


        @yield('content')



        <!-- Footer -->
        @include('layouts.footer')
        <!-- End Footer -->


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.localScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.viewport.mini.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
    **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.simple-text-rotator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/contact-form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/rev-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/custom-js.js') }}"></script>
    <!-- FACEBOOK SUPPORT CHAT -->
    <script type="text/javascript">
    (function(d, s, id) {
        var z = d.createElement(s);
        z.type = "text/javascript";
        z.id = id;
        z.async = true;
        z.src = "//static.zotabox.com/2/a/2a6fc4c8863090a636c3e219109dbbc9/widgets.js";
        var sz = d.getElementsByTagName(s)[0];
        sz.parentNode.insertBefore(z, sz)
    }(document, "script", "zb-embed-code"));
    </script>
</body>
</html>
