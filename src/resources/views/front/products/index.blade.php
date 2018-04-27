@extends('layouts.master')
@section('title','Dakmark foods - Product')
@section('header')

@endsection
@section('content')

    <!-- Head Section -->
    <section class="small-section pt-60 pb-20 bg-gray-lighter">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                @if(!empty($promo))
                    <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('header.promotion')</h1>
                @else
                    <h1 class="hs-line-11 mb-20 mb-xs-0">{{$category->translation->name??$category->name??__('header.products')}}</h1>
                @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->

    <!-- PRODUCT PAGE-->
    <section class="small-section productlist">
        <div class="container relative">
            <div class="row">
                <!-- PRODUCT CONTENT -->
                <div class="col-md-9 col-sm-8 col-xs-12 mb-30">

                    <!-- PRODUCT FILTER -->
                    <div class="clearfix mb-40">
                        {{ $results->links() }}
<!--                         <div class="left section-text mt-10">
                            @lang('common.showing') <span class="sub">{{($results->currentPage()- 1) * 12 + 1}}-{{$results->total() * $results->currentPage() }} @lang('common.of') {{$results->count()}}</span>
                        </div> -->
                    </div>
                    <!-- END PRODUCT FILTER -->

                    <!-- PRODUCT LISTs -->
                    <div class="row multi-columns-row">
                    @foreach($results as $key => $product)
                        <!-- Shop Item -->
                        <div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3 mb-30 mb-xs-30">
                            <div class="post-prev-img">
                                <a href="{{url('/product')}}/{{$product->slug}}"><img src="{{asset('/storage')}}/{{$product->GetMediaByOrderAsc()->thumb??'images/no-image.png'}}" class="product-main-img" alt=""></a>
                                @if($product->sold_off)
                                    <div class="pro-overlay-info align-left">
                                        <span class="hethang">Sold Off</span>
                                    </div>
                                @else
                                    @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                        <div class="pro-overlay-info align-left">
                                            <span class="giamgia">@lang('product.sale')</span>
                                        </div>
                                    @endif
                                @endif
                            </div>  

                            <div class="post-prev-title align-center">
                                <a href="{{url('/product')}}/{{$product->slug}}">{{$product->translation->name??$product->name}}</a>
                            </div>
                            <div class="post-prev-text align-center mb-0">
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
                                    <br>
                                @endif 
                                @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                    <del class="section-text">{{FormatPrice::price($product->price)}}</del> &nbsp;
                                    <strong>{{$product->special_price}}</strong>
                                @else
                                    <strong>{{FormatPrice::price($product->price)}}</strong>
                                @endif
                            </div>
                            <div class="post-prev-more align-center">
                                @if(!$product->call_for_price)
                                    @if(!$product->disable_buy_button)
                                        @if(!$product->sold_off)
                                        <form method="post" action="#" class="form">
                                            <a href="javascript:void(0)" data-id="{{$product->id}}" data-name="{{$product->name}}" class="readmore add-shoopingcart btn btn-mod btn-border btn-circle mt-10 addcart">@lang('shoppings.add-cart')</a>
                                        </form>
                                        @endif
                                    @endif
                                @else
                                    <a class="call btn btn-mod btn-border btn-circle mt-10 addcart" href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                @endif
                            </div>
                        </div>
                        <!-- End Shop Item -->
                    @endforeach
                    </div>
                    <!-- END PRODUCT LISTs -->

                    <!-- PRODUCT PAGINATION -->
                    {{ $results->links() }}
                    {{--<div class="pagination">--}}
                        {{--{{ $results->links() }}--}}
                        {{--<a href=""><i class="fa fa-angle-left"></i></a>--}}
                        {{--<a href="" class="active">1</a>--}}
                        {{--<a href="">2</a>--}}
                        {{--<a href="">3</a>--}}
                        {{--<a class="no-active">...</a>--}}
                        {{--<a href="">9</a>--}}
                        {{--<a href=""><i class="fa fa-angle-right"></i></a>--}}
                    {{--</div>--}}
                    <!-- END PRODUCT PAGINATION -->
                </div>
                <!-- END PRODUCT CONTENT -->

                <!-- PRODUCT SIDEBAR -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        {!! Form::open(array('url' => '/search', 'class' => 'form-inline form')) !!}
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="@lang('header.search')">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" id="s" name="key" class="form-control search-field" placeholder="@lang('header.enter-keyword')">
                                <input type="hidden" name="searchtype" value="product">
                            </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="widget cats">
                        <h5 class="widget-title">@lang('common.categories')</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                @foreach($product_menu->GetMenuSubLevel1() as $sub)
                                    <li>
                                        <a href="{{url('/products')}}/{{$sub->slug}}">
                                            <i class="fa fa-circle-thin" aria-hidden="true"></i>
                                            {{$sub->translation->name??$sub->name}}
                                        </a>
                                    </li>
                                @endforeach
                                {{--<li>--}}
                                    {{--<a href="#" title="">--}}
                                        {{--<i class="fa fa-circle-thin" aria-hidden="true"></i>  Coffee--}}
                                        {{--<small class="right">(12)</small>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                    </div>
                    @if(empty($promo))
                    <div class="widget">
                        <h5 class="widget-title">@lang('home.best-sellers-products') <a href="{{url('/bestseller')}}" class="pull-right"><i class="fa fa-angle-double-right"></i></a></h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                            @foreach($best_sellers_products as $product)
                                <!-- Preview item -->
                                <li class="clearfix">
                                    <a href="{{url('/product')}}/{{$product->slug}}"><img src="{{ asset('/storage') }}/{{$product->GetMediaByOrderAsc()->source??'images/no-image.png'}}" alt="" class="widget-posts-img"></a>
                                    <div class="widget-posts-descr">
                                        <a href="{{url('/product')}}/{{$product->slug}}" title="">{{$product->translation->name??$product->name}}</a>
                                        <div>
                                            @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                                <del class="section-text">{{FormatPrice::price($product->price)}}</del> &nbsp;
                                                <strong>{{FormatPrice::price($product->special_price)}}</strong>
                                            @else
                                                <strong>{{FormatPrice::price($product->price)}}</strong>
                                            @endif
                                        </div>
                                        <div>
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
                                        </div>
                                    </div>
                                </li>
                                <!-- End Preview item -->
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- END PRODUCT SIDEBAR -->
            </div>
        </div>
    </section>
    <!-- END PRODUCT PAGE-->

@endsection
@section('scripts')
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('js/flytocart.js') }}"></script>
<script>
     $(document).ready(function(){      
        $('.add-shoopingcart').click(function() {
            var id = $(this).attr("data-id") 
            var name = $(this).attr("data-name") 
            var price = 0;
            var quantity = 1;
            $.ajax({
               type:'POST',
               url:'{{ url("/add-to-cart") }}',              
               data: {
                    'id': id, //just test
                    'name': name,//just test
                    'price': price,//just test
                    'quantity': quantity,//just test
                },
               success:function(response){
                console.log(response['message']);
               },
               error:function(response){
                  console.log(response['message']);
               }
            });
        });
    });
</script>
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59f8733056502d001224650a&product=sticky-share-buttons""></script>
@endsection