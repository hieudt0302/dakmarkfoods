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
        
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/images/favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/images/favicons//favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/images/favicons//favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('frontend/images/favicons/manifest.json')}}">
        <meta name="theme-color" content="#ffffff">
        
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom-style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/vertical-rhythm.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/timeline.css') }}">

        <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
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
            <div id="full-screen-search" class="">
                <button type="button" class="close">×</button>
                {!! Form::open(array('url' => '/search')) !!}
                <div class="seach-input">
                    <input type="text" class="search" id="s" name="key" placeholder="@lang('header.enter-keyword')" autofocus="autofocus">
                    <input type="hidden" name="searchtype" value="all">
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
            <a class="popup-with-form" id="popup-with-form" href="#newsletter-popup" style="display: none;"></a>
            <div id="newsletter-popup" class="mfp-hide white-popup-block" style="width: auto; max-width: 500px; background-color: #fff; border-radius: 6px; padding: 20px;margin: 0px auto;">
                <div class="newsletter-popup-wrap">
                    <div class="newsletter-icon" style="text-align: center;">
                        <img src="{{ asset('frontend/images/Mail-icon.png')}}" alt="" style="width: 120px;">
                    </div>
                    <h3 class="section-title">@lang('footer.newsletter-message')</h3>
                    <p style="text-align: center;"></p>
                    <div class="form" id="mailchimp" novalidate="true">
                        <div class="mb-20">
                            <input placeholder="{{ __('profile.email') }}" name="subscribe_email_pop" class="form-control input-md round mb-10" type="email" pattern=".{5,100}" required/>
                            <button type="submit" class="subscribe1 btn btn-mod btn-gray btn-medium btn-round form-control mb-xs-10">@lang('footer.subscribe')</button>
                            <div class="subscribe-success-pop" style="display:none;">@lang('footer.subscribe-success')</div>
                            <div class="subscribe-failed-pop" style="display:none;">@lang('footer.subscribe-failed')</div>     
                        </div>
                        <div id="subscribe-result"></div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- End Page Wrap -->
                
        <!-- JS -->
        
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
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.cookie.js') }}"></script>
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

        <script type="text/javascript">
            $('button.subscribe1').click(function() {  
                $.ajax({
                    type: "POST",
                    url: "{{url('/subscribe')}}" ,
                    data: {
                        "email": $("input[name='subscribe_email_pop']").val(),
                    },
                    success: function(res){
                        if(res.success){
                            $(".subscribe-success-pop").show();
                            $(".subscribe-failed-pop").hide();
                        }
                        else{
                            $(".subscribe-success-pop").hide();
                            $(".subscribe-failed-pop").show();
                        }
                        
                    },
                    error:function(res){
                        console.log("Error!");  
                    }
                });            
            });
        </script>
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
