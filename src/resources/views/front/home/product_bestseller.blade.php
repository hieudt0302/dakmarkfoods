<!-- Best Seller Product -->

<section class="small-section pt-50 pb-30">
    <div class="container relative">
        <h2 class="section-title align-left mb-30 mb-sm-40">
            SẢN PHẨM MUA NHIỀU
            <a href="#" class="section-more right">xem thêm <i class="fa fa-angle-right"></i></a>
        </h2>
        <div class="row multi-columns-row">
            @foreach($best_sellers_products as $product)
            <!-- Shop Item -->
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                <div class="post-prev-img">
                    <a href="{{url('/products')}}/{{$product->slug}}"><img src="{{ asset('/storage') }}/{{$product->GetMediaByOrderAsc()->source??'images/no-image.png'}}" alt=""></a>
                    {{--<div class="intro-label">--}}
                        {{--<span class="label label-danger bg-red">30%</span>--}}
                    {{--</div>--}}
                </div>
                <div class="post-prev-title align-center">
                    <a href="{{url('/products')}}/{{$product->slug}}">{{$product->translation->name??$product->name}}</a>
                </div>
                <div class="post-prev-text align-center mb-0">
                    @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                        <del class="section-text">{{$product->price}}</del> &nbsp;
                        <strong>{{$product->special_price}}</strong>
                    @else
                        @if($product->old_price > 0)
                            <del class="section-text">{{$product->old_price}}</del> &nbsp;
                        @endif
                        <strong>{{$product->price}}</strong>
                    @endif
                </div>
            </div>
            <!-- End Shop Item -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Best Seller Product -->