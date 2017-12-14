<!-- Section -->
<section class="page-section ">
    <div class="container relative">

        <h2 class="section-title mb-70 mb-sm-40">
            {{$banner_translation->title??''}}
        </h2>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="section-text align-center mb-70 mb-xs-40">
                    {!! $banner_translation->content??'' !!}
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Item -->
            <div class="col-sm-4 mb-20 wow fadeIn" data-wow-delay="0.1s" data-wow-duration="2s">

                <div class="post-prev-img">
                    <a href="{{ Setting::config('banner-url-1') }}"><img src="{{ asset('images/foods/banner-1.jpg')}}" alt="" /></a>
                </div>

            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="col-sm-4 mb-20 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">

                <div class="post-prev-img">
                    <a href="{{ Setting::config('banner-url-2') }}"><img src="{{ asset('images/foods/banner-2.jpg')}}" alt="" /></a>
                </div>

            </div>
            <!-- End Item -->

            <!-- Item -->
            <div class="col-sm-4 mb-20 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">

                <div class="post-prev-img">
                    <a href="{{ Setting::config('banner-url-3') }}"><img src="{{ asset('images/foods/banner-3.jpg')}}" alt="" /></a>
                </div>

            </div>
            <!-- End Item -->

        </div>

    </div>
</section>
<!-- End Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 " />
<!-- End Divider -->


<!-- Section -->
<section class="page-section">
    <div class="container relative">

        <!-- Features Grid -->
        <div class="row alt-features-grid">

            <!-- Text Item -->
            <div class="col-sm-3">
                <div class="alt-features-item align-center">
                    <div class="alt-features-descr align-left">
                        <h4 class="mt-0">@lang('home.our-policy')</h4>
                        @lang('home.our-policy-detail')
                    </div>
                </div>
            </div>
            <!-- End Text Item -->

            <!-- Features Item -->
            <div class="col-sm-3">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-chat"></span>
                    </div>
                    <h3 class="alt-features-title">@lang('home.policy1')</h3>
                    <p>@lang('home.policy1-details')</p>
                </div>
            </div>
            <!-- End Features Item -->

            <!-- Features Item -->
            <div class="col-sm-3">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-wallet"></span>
                    </div>
                    <h3 class="alt-features-title">@lang('home.policy2')</h3>
                    <p>@lang('home.policy2-details')</p>
                </div>
            </div>
            <!-- End Features Item -->

            <!-- Features Item -->
            <div class="col-sm-3">
                <div class="alt-features-item align-center">
                    <div class="alt-features-icon">
                        <span class="icon-hotairballoon"></span>
                    </div>
                    <h3 class="alt-features-title">@lang('home.policy3')</h3>
                    <p>@lang('home.policy3-details')</p>
                </div>
            </div>
            <!-- End Features Item -->

        </div>
        <!-- End Features Grid -->

    </div>
</section>
<!-- End Section -->
<!-- Divider -->
<hr class="mt-0 mb-0 " />
<!-- End Divider -->