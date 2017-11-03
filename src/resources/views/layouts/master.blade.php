<!DOCTYPE html>
<html>
    <head>
         <!-- META -->
         <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="robots" content="index, follow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="DakMark Foods">
        <meta name="description" content="">
        <meta property="og:description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- END META -->

        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
       <!-- FAVICON: GENERATE HERE: http://www.favicomatic.com -->
        <link rel="apple-touch-icon" sizes="180x180" href="">
        <link rel="apple-touch-icon" sizes="57x57" href="" />
        <link rel="apple-touch-icon" sizes="60x60" href="" />
        <link rel="apple-touch-icon" sizes="72x72" href="" />
        <link rel="apple-touch-icon" sizes="76x76" href="" />
        <link rel="apple-touch-icon" sizes="114x114" href="" />
        <link rel="apple-touch-icon" sizes="120x120" href="" />
        <link rel="apple-touch-icon" sizes="144x144" href="" />
        <link rel="apple-touch-icon" sizes="152x152" href="" />
        <link rel="apple-touch-icon" sizes="180x180" href="" />
        <link rel="icon" type="image/png" href="" sizes="196x196" />
        <link rel="icon" type="image/png" href="" sizes="96x96" />
        <link rel="icon" type="image/png" href="" sizes="32x32" />
        <link rel="icon" type="image/png" href="" sizes="16x16" />
        <link rel="icon" type="image/png" href="" sizes="128x128" />
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#e81000">
        <meta name="apple-mobile-web-app-title" content="BBLand">
        <meta name="application-name" content="BBLand">
        <meta name="theme-color" content="#ffffff">
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
        <!-- END FAVICON -->

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom-style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/vertical-rhythm.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}">

        @yield('header')
    </head>
    <body class="appear-animate">
        
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


            <!-- Foter -->
            @include('layouts.footer')
            <!-- End Foter -->
            
        </div>
        <!-- End Page Wrap -->
                
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
        <script type="text/javascript" src="{{ asset('frontend/js/bootstrapscrollspy.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('frontend/js/custom-js.js') }}"></script>

        <script>
                (function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                })();
        </script>
        @yield('scripts')
    </body>
</html>
