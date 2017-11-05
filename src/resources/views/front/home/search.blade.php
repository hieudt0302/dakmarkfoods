@extends('layouts.master')
@section('title','Pokofarms - '.__('header.search'))
@section('content')


    <!-- Head Section -->
    <section class="small-section pt-60 pb-40 bg-gray-lighter">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('common.search-results')</h1>
                    <div class="hs-line-4 black">
                        @lang('common.search-message')&nbsp;{{$search_key}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->

    <section class="small-section">
        <div class="relative container align-left">
            <!-- Product Results-->
            <div class="col-xs-12 productresult">
                <h2 class="section-title align-center pb-40">
                    @lang('header.products')
                </h2>
                <div class="row multi-columns-row">
{{--                    {{dd($products)}}--}}
                    {{--{{dd($posts)}}--}}

                    @foreach($products as $product)
                        {{--{{ dd($product->product) }}--}}
                    <div class="item col-xs-6 col-sm-6 col-md-4 col-lg-3 mb-30 mb-xs-30">
                        <div class="post-prev-img">
                            <a href="{{url('/product')}}/{{$product->slug}}"><img src="{{asset('/storage')}}/{{$product->GetMediaByOrderAsc()->thumb??'images/no-image.png'}}" alt=""></a>
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
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="{{url('/product')}}/{{$product->slug}}">{{$product->translation->name??$product->name}}</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                <del class="section-text">{{$product->price}}</del> &nbsp;
                                <strong>{{$product->special_price}}</strong>
                            @else
                                @if($product->old_price > 0)
                                    <del class="section-text">{{$product->old_price}}</del>
                                @endif
                                <strong>{{$product->price}}</strong>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pt20 pb20">
                    {{ $products->appends(request()->all())->render() }}
                    {{--{{ $products->links() }}--}}
{{--                    {{ $products->appends(['product_page' => $products->currentPage()])->links() }}--}}

                </div>
            </div>
            <!-- End Product Results-->
            <!-- Blog Results-->
            <div class="col-xs-12 blogresult">
                <h2 class="section-title align-center pb-40">
                    @lang('header.blogs')
                </h2>
                <div class="row multi-columns-row">
                    @foreach($posts as $post)
{{--                    @if($post->post->published==1)--}}
                        {{--{{ dd($post->post) }}--}}
                    <div class="col-xs-12 col-sm-6 mb-20">
                        <div class="blog-item">
                            <!-- Post Title -->
                            <h2 class="blog-item-title"><a href="{{url('/posts')}}/{{$post->slug}}">{{$post->translation->title??$post->title}}</a></h2>

                            <!-- Text Intro -->
                            <div class="blog-item-body">
                                <p>
                                    {{$post->translation->excerpt??$post->excerpt}}
                                </p>
                            </div>
                            <!-- Read More Link -->
                            <div class="blog-item-foot">
                                <a href="{{url('/posts')}}/{{$post->slug}}" class="btn btn-mod btn-round  btn-small">@lang('common.read-more') <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- End Post -->
                    </div>
                    {{--@endif--}}
                    @endforeach
                </div>
                <div class="pt20 pb20">
                    {{ $posts->appends(request()->all())->render() }}
{{--                    {{ $posts->links() }}--}}
{{--                    {{$posts->appends(['post_page' => $posts->currentPage()])->links()}}--}}
                </div>
            </div>
            <!-- End Blog Results-->

        </div>
    </section>

@endsection
