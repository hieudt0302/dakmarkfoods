<div class="home-section fullwidth-slider bg-dark" id="home">
    
    @foreach ($sliders as $slider)
    <!-- Slide Item -->
    <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-20" data-background="{{asset('/storage/'.$slider->image) }}">
        <div class="js-height-parent container">
            <!-- Hero Content -->
            <div class="home-content">
                <div class="home-text">
                    <div class="hs-line-14 mb-50 mb-xs-10">
                        {{$slider->translation->description}}
                    </div>
                    <div class="local-scroll">
                        <a href="{{url('/menu')}}/{{$slider->url}}" class="btn btn-mod btn-w btn-round" style="margin-top:-3px;">@lang('common.more-details')</a>
                    </div>
                </div>
            </div>
            <!-- End Hero Content -->
        </div>
    </section>
    <!-- End Slide Item -->
    @endforeach    
</div>
