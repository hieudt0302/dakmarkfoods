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
                                @lang('common.headquarter-address')
                            </li>
                            <li>
                                <a href="tel:+842462531666" id="call-number"><i class="fa fa-phone-square" aria-hidden="true"></i> 024 6253 1666</a>
                            </li>
                            <li>
                                <a href="tel:+84916322822"><i class="fa fa-mobile" aria-hidden="true"></i> 0916 322 822</a>
                            </li>
                            <li>
                                <a href="mailto:dakmark@dakmark.com.vn"><i class="fa fa-envelope-o" aria-hidden="true"></i> dakmark@dakmark.com.vn</a>
                            </li>
                        </ul>
                        <div class="mb-20 mt-20 ">
                            <strong>ĐƯỢC CHỨNG NHẬN</strong>
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
                    <h5 class="widget-title ">PHƯƠNG THỨC THANH TOÁN</h5>
                    <div class="widget-body ">
                        <div class="phuongthucthanhtoan ">
                                    <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-visa.svg') }}">
                                    </span>
                            <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-mastercard.svg') }}">
                                    </span>
                            <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-jcb.svg') }}">
                                    </span>
                            <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-cash.svg') }}">
                                    </span>
                            <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-internet-banking.svg') }}">
                                    </span>
                            <span class="payment pb-10 ">
                                        <img src="{{ asset('frontend/images/tt/ic-installment.svg') }}">
                                    </span>
                        </div>
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
                                <form class="form" id="mailchimp">
                                    <div class="mb-20">Stay informed with our newsletter. Please trust us, we will never send you spam.</div>
                                    <div class="mb-20">
                                        <input placeholder="Enter Your Email" class="form-control input-md round mb-10" type="email" pattern=".{5,100}" required/>
                                        <button type="submit" class="btn btn-mod btn-gray btn-medium btn-round form-control mb-xs-10">Subscribe</button>
                                    </div>
                                    <div id="subscribe-result"></div>
                                </form>
                            </div>
                            <div class="footer-social-links ">
                                <a href="#" title="Facebook " target="_blank "><i class="fa fa-facebook "></i></a>
                                <a href="#" title="Twitter " target="_blank "><i class="fa fa-twitter "></i></a>
                                <a href="#" title="Behance " target="_blank "><i class="fa fa-behance "></i></a>
                                <a href="#" title="LinkedIn+ " target="_blank "><i class="fa fa-linkedin "></i></a>
                                <a href="#" title="Pinterest " target="_blank "><i class="fa fa-pinterest "></i></a>
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