<section class="small-section pt-50 pb-30">
    <div class="container relative">
        <h2 class="section-title align-left mb-30 mb-sm-40">
            @lang('home.sale-products')
            <a href="{{url('/sales')}}" class="section-more right">@lang('common.see-more') <i class="fa fa-angle-right"></i></a>
        </h2>
        <div class="row">
            <div class="image-carousel owl-carousel">

            @foreach($sale_products as $product)
                <!-- Shop Item -->
                    <div>
                        <div class="post-prev-img p15">
                            <a href="{{url('/posts')}}/{{$product->slug}}"><img src="{{ asset('/storage') }}/{{$product->GetMediaByOrderAsc()->source??'images/no-image.png'}}" alt=""></a>
                            @if($product->sold_off)
                                <div class="pro-overlay-info align-left">
                                    <span class="hethang">Sold Off</span>
                                </div>
                            @else
                                @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                    <div class="pro-overlay-info align-left">
                                        <span class="giamgia">SALE</span>
                                    </div>
                                @endif
                            @endif
                            {{--<div class="pro-overlay-info align-bottom-left">--}}
                                {{--<a href="#"><i class="fa fa-heart-o"></i></a>--}}
                            {{--</div>--}}

                        </div>
                        <div class="post-prev-title align-center">
                            <a href="{{url('/product')}}/{{$product->slug}}">{{$product->translation->name??$product->name}}</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <p>
                                @if( $product->comments->avg('rate') )
                                
                                    @if($product->comments->avg('rate')>=1)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    @endif
                                    @if($product->comments->avg('rate')>=2)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                                    @if($product->comments->avg('rate')>=3)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    @endif
                                    @if($product->comments->avg('rate')>=4)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    @endif
                                    @if($product->comments->avg('rate')>=5)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @else
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    @endif
                                    ({{count($product->comments)}} @lang('product.reviews'))
                                    
                                @endif 
                            </p>
                            @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                <del class="section-text">{{$product->price}}</del> &nbsp;
                                <strong>{{FormatPrice::price($product->special_price)}}</strong>
                            @else
                                @if($product->old_price > 0)
                                    <del class="section-text">{{$product->old_price}}</del> &nbsp;
                                @endif
                                <strong>{{FormatPrice::price($product->price)}}</strong>
                            @endif
                        </div>
                    </div>
                    <!-- End Shop Item -->
            @endforeach

            </div>
        </div>

    </div>
</section>