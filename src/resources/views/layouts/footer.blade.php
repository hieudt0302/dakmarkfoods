<footer class="page-section bg-gray footer pb-20 pt-30 align-left ">
    <div class="container ">
        <div class="row align-left ">
            <!-- Widget -->
            <div class="col-sm-6 col-md-3 ">
                <div class="widget ">
                    <h5 class="widget-title ">@lang('header.about-us')</h5>
                    <div class="widget-body ">
                        <ul class="clearlist widget-menu ">
                            <li>
                                <a href="{{url('/about')}}" title=" "><b>@lang('common.company-name').</b></a>
                            </li>
                            <li>
                                {{ Setting::config('address') }}
                            </li>
                            <li>
                                <a href="tel:+842462531666" id="call-number"><i class="fa fa-phone-square" aria-hidden="true"></i> {{ Setting::config('phone') }}</a>
                            </li>
                            <li>
                                <a href="mailto:{{ Setting::config('email') }}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ Setting::config('email') }}</a>
                            </li>
                        </ul>
                        <div class="mb-20 mt-20 ">
                            <strong>@lang('footer.verified-by')</strong>
                            <a target="_blank " href="#" rel="nofollow"><img alt=" " title=" " src="{{ asset('frontend/images/home-sample/1492058103818_8888090.png') }} " class="img-responsive "></a>
                            <a target="_blank " href="#" rel="nofollow"><img alt=" " title=" " src="{{ asset('frontend/images/home-sample/bo-cong-thuong.da-dang-ky.png') }} " class="img-responsive "></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget -->
            <!-- Widget -->
            <div class="col-sm-6 col-md-3 ">
                <div class="widget ">
                    <h5 class="widget-title">@lang('footer.customer-support')</h5>
                    <div class="widget-body">
                        <ul class="clearlist widget-menu">
                            <li>
                                <a href="{{ url('/returns') }}" title=" "><i class="fa fa-angle-right "></i> @lang('footer.returns')</a>
                            </li>
                            <li>
                                <a href="{{ url('/faqs') }}" title=" "><i class="fa fa-angle-right "></i> @lang('footer.faq')</a>
                            </li>
                            <li>
                                <a href="{{ url('/purchase-flow') }}" title=" "><i class="fa fa-angle-right "></i> @lang('footer.purchase-flow')</a>
                            </li>
                            <li>
                                <a href="{{ url('/showrooms') }}" title=" "><i class="fa fa-angle-right "></i> @lang('footer.showroom-locations')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Widget -->
            <!-- Widget -->
            <div class="col-sm-6 col-md-3 ">
                <div class="widget ">
                    <h5 class="widget-title ">@lang('footer.my-account')</h5>
                    <div class="widget-body ">
                        <ul class="clearlist widget-menu">
                        @if (Auth::guest())
                        <!-- Sub Column -->
                            <li><a href="{{ url('/login') }}"><i class="fa fa-angle-right "></i> @lang('auth.login')</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-angle-right "></i> @lang('auth.register')</a></li>
                            <!-- End Sub Column -->
                        @else
                            <li><a href="{{ url('/cart') }}"><i class="fa fa-angle-right "></i> @lang('footer.view-cart')</i></a></li>
                            <li><a href="{{ url('/wishlist') }}"><i class="fa fa-angle-right "></i> @lang('footer.my-wishlist')</i></a></li>
                            <li><a href="{{ url('/Account/Orders') }}"><i class="fa fa-angle-right "></i> @lang('footer.order-history')</i></a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-angle-right "></i> @lang('auth.logout')</i></a></li>
                        @endif
                        </ul>
                    </div>
                </div>
                <!-- End Widget -->
            </div>
            <!-- End Widget -->
            <!-- Widget -->
            <div class="col-sm-6 col-md-3 ">
                <div class="widget ">
                    <h5 class="widget-title ">@lang('footer.follow-us')</h5>
                    <div class="widget-body ">
                        <div class="widget-text clearfix ">
                            {{--<div class="mb-20 ">NEWSLETTER</div>--}}
                            <div class="widget-text clearfix">
                                <div class="form" id="mailchimp">
                                    <div class="mb-20">@lang('footer.newsletter-message')</div>
                                    <div class="mb-20">
                                        <input placeholder="{{ __('profile.email') }}" name="subscribe_email" class="form-control input-md round mb-10" type="text"  required/>
                                        <button type="button" class="btn btn-mod btn-gray btn-medium btn-round form-control mb-xs-10 subscribe1">@lang('footer.subscribe')</button>
                                    </div>
                                    <div id="subscribe-result">
                                        <div class="subscribe-success">@lang('footer.subscribe-success')</div>
                                        <div class="subscribe-failed">@lang('footer.subscribe-failed')</div>   
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="footer-social-links ">
                                <a href="http://www.facebbook.com/{{ Setting::config('facebook') }}" title="Facebook " target="_blank "><i class="fa fa-facebook "></i></a>
                                <a href="http://www.twitter.com/{{ Setting::config('twitter') }}" title="Twitter " target="_blank "><i class="fa fa-twitter "></i></a>
                                <a href="skype:{{ Setting::config('skype')}}?chat" title="Skype " target="_blank "><i class="fa fa-skype "></i></a>
                                <a href="http://www.youtube.com/{{ Setting::config('youtube') }}" title="Youtube " target="_blank "><i class="fa fa-youtube-play "></i></a>
                                <a href="http://www.vimeo.com/{{ Setting::config('vimeo') }}" title="Vimeo " target="_blank "><i class="fa fa-vimeo "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget -->
        </div>
    </div>
    <!-- Top Link -->
    <div class="local-scroll ">
        <a href="#top " class="link-to-top"><i class="fa fa-caret-up "></i></a>
    </div>
    <!-- End Top Link -->
</footer>

<script type="text/javascript">
    $('button.subscribe1').click(function() {  
        $.ajax({
            type: "POST",
            url: "{{url('/subscribe')}}" ,
            data: {
                "email": $("input[name='subscribe_email']").val(),
            },
            success: function(res){
                var test = $("input[name='subscribe_email']").val();
                if(res.success){
                    $(".subscribe-success").show();
                    $(".subscribe-failed").hide();
                }
                else{
                    $(".subscribe-success").hide();
                    $(".subscribe-failed").show();
                }
                
            },
            error:function(res){
                console.log("Error!");  
            }
        });            
    });
</script>