@extends('layouts.master')
@section('title',$product->name)
@section('header')

@endsection
@section('content')

<!-- Product Info -->
<section class="small-section pb-10" id="mota">
	<div class="container relative">
		<div class="row mb-30">
			<!-- PRODUCT IMAGE -->
			<div class="col-md-4 mb-md-30">
				@if(count($product->medias) > 0)
					@foreach($product->medias as $key =>  $media)
						@if($key === 0)
							<div class="pro-img">
								<div class="post-prev-img">
									<a href="{{asset('/storage')}}/{{$media->source}}" class="lightbox-gallery-3 mfp-image product-main-img"><img src="{{asset('/storage')}}/{{$media->source}}" alt=""></a>
									@if(!$product->sold_off)
										@if($is_sales)
											<div class="pro-overlay-info align-left">
												<span class="giamgia">@lang('product.sale')</span>
											</div>
										@endif
									@endif
								</div>
							</div>
						@else
							@if($key === 1)
								<div class="more-img">
									{{--<a href="#" class="prev"><i class="ion-ios-arrow-thin-left"></i></a>--}}
									{{--@endif--}}
									{{--@if($key < 4)--}}
										{{--@if($key === 1)--}}
											{{--<img class="sub-img img1" src="{{asset('/storage')}}/{{$media->source}}" alt="">--}}
										{{--@else--}}
											{{--<img class="sub-img" src="{{asset('/storage')}}/{{$media->source}}" alt="">--}}
										{{--@endif--}}
									{{--@endif--}}
									{{--@if($key + 1  == count($product->medias))--}}
										{{--<a href="#" class="next"><i class="ion-ios-arrow-thin-right"></i></a>--}}
								</div>
							@endif
						@endif
					@endforeach
				@else
					<div class="pro-img">
						<div class="post-prev-img">
							<a href="{{asset('/images/no-image.png')}}" class="lightbox-gallery-3 mfp-image product-main-img"><img src="{{asset('/images/no-image.png')}}" alt=""></a>
						</div>
					</div>
				@endif
			</div>
			<!-- END PRODUCT IMAGE -->
			<div class="col-md-8 mb-md-30">
				<h3 class="mt-0 mb-20">
					{{$product->translation->name??$product->name}}
					@if(!$product->disable_wishlist_button)
						<a href="javascript:void(0)" class="yeuthich pull-right add-wishlist"><i class="fa fa-heart-o"></i></a>
					@endif

				</h3>
				<div class="mod-breadcrumbs mb-10">
					<a href="{{url('/products')}}">@lang('product.product')</a>&nbsp;/&nbsp;<span>{{$product->translation->name??$product->name}}</span>
				</div>
				<hr class="mt-0">
				<div class="row">
					<div class="col-xs-6 lead mt-0 mb-20">
						@if($product->sold_off)
							<strong>Sold Off</strong>
						@else
							@if(!$is_sales)
								<del class="section-text">{{FormatPrice::price($product->old_price)}}</del>
								<strong>{{FormatPrice::price($product->price)}}</strong>
							@else
								<del class="section-text">{{FormatPrice::price($product->price)}}</del>
								<strong>{{FormatPrice::price($product->special_price)}}</strong>
								<span class="hot">@lang('product.sale')</span>
							@endif
						@endif
					</div>
					<div class="col-xs-6 align-right section-text reviews local-scroll">
						@if($starAvg>=1)
							<i class="fa fa-star" aria-hidden="true"></i>
						@else
							<i class="fa fa-star-o" aria-hidden="true"></i>
						@endif
						@if($starAvg>=2)
							<i class="fa fa-star" aria-hidden="true"></i>
						@else
							<i class="fa fa-star-o"></i>
						@endif
						@if($starAvg>=3)
							<i class="fa fa-star" aria-hidden="true"></i>
						@else
							<i class="fa fa-star-o" aria-hidden="true"></i>
						@endif
						@if($starAvg>=4)
							<i class="fa fa-star" aria-hidden="true"></i>
						@else
							<i class="fa fa-star-o" aria-hidden="true"></i>
						@endif
						@if($starAvg>=5)
							<i class="fa fa-star" aria-hidden="true"></i>
						@else
							<i class="fa fa-star-o" aria-hidden="true"></i>
						@endif
						 &nbsp;<a href="#reviewbox">({{count($product->comments)}} reviews)</a>
					</div>
				</div>
				<hr class="mt-0">
				<div class="section-text mb-20">
					{{$product->translation->summary??''}}
				</div>
				{{--<div class="quatang">--}}
					{{--<h4 class="mt-0 mb-0">KHUYẾN MÃI ĐI KÈM</h4>--}}
					{{--<ul class="clearlist widget-menu">--}}
						{{--<li><i class="fa fa-gift" aria-hidden="true"></i> Hỗ Trợ A</li>--}}
						{{--<li><i class="fa fa-gift" aria-hidden="true"></i> Hỗ Trợ A</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
				<hr class="mt-10">
				<div class="mb-20">
					@if(!$product->call_for_price)
						@if(!$product->disable_buy_button)
							<form method="post" action="#" class="form">
								<input type="number" class="input-lg round" min="1" max="100" value="1">
								<a href="javascript:void(0)" class="readmore add-shoopingcart btn btn-mod btn-large btn-round">@lang('shoppings.add-cart')</a>
							</form>
						@endif
					@else
						<button class="call btn btn-mod btn-large btn-round" href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></button>
					@endif
				</div>
				<hr class="mt-0">
				<div class="section-text small">
					<div>SKU: <span>{{$product->sku}}</span></div>
					<div class="social-share">
						Chia sẻ:
						<a href="https://www.facebook.com/sharer/sharer.php?u={{url('/product')}}/{{$product->slug}}" class="social facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/intent/tweet?url={{url('/product')}}/{{$product->slug}}" class="social twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="http://pinterest.com/pin/create/button/?url={{url('/product')}}/{{$product->slug}}&media={{asset('/storage')}}/{{$media->source}}&description={{$product->translation->summary??''}}" class="social pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
					</div>
					<div class="tags">Tags:
						@foreach($product->tags as $tag)
							<a href="#">{{$tag->name}}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Product Info -->

<!-- Product Tabs-->
<div class="tabsanpham bg-gray-lighter pt-0 pb-0" id="product-tabs">
	<div class="container relative">
		<ul class="nav nav-tabs tablist local-scroll" role="tablist">
			<li><a href="#gioithieu" class="active">@lang('product.description')</a></li>
			<li><a href="#specs">@lang('product.add-info')</a></li>
			<li><a href="#reviewbox">@lang('product.reviews') ({{count($product->comments)}})</a></li>
		</ul>
	</div>
</div>
<!-- End Product Tabs-->

<!-- Product Description -->
<section class="small-section bg-gray-lighter gioithieu pt-20 pb-0" id="gioithieu">
	<div class="container relative">
		<div class="post-content">
			{!!$product->translation->description??''!!}
		</div>
	</div>
</section>
<!-- End Product Description -->

<!-- Product Specs -->
<section class="small-section pt-20 pb-0 bg-gray-lighter" id="specs">
	<div class="container relative">
		<h3 class="section-title align-left mb-10 ">@lang('product.add-info')</h3>
		<div class="specs-content">
			{!!$product->translation->specs??''!!}
		</div>
	</div>
</section>
<!-- End Product Specs -->

<!-- Product Review -->
<section class="small-section pt-20 pb-0 bg-gray-lighter" id="reviewbox">
	<div class="container relative local-scroll">
		<h3 class="section-title align-left mb-10 ">@lang('product.reviews') ({{count($product->comments)}})<a href="#reviewboxform" class="section-more right">@lang('product.add-review')</a></h3>
		<div class="review-content">
			<ul class="media-list text comment-list clearlist ">
			@foreach($product->comments as  $review)
				<!-- Comment Item -->
				<li class="media comment-item ">
					<a class="pull-left" href="#"><img class="media-object comment-avatar " src="{{asset('frontend/images/user-avatar.png')}}" alt=" "></a>
					<div class="media-body ">
						<div class="comment-item-data ">
							<div class="comment-author ">
								<a href="#">{{$review->name}}</a>
							</div>
							{{date('M d, Y',strtotime($review->created_at))}}<span class="separator ">—</span>
							<span>
								@if($review->rate>=1)
									<i class="fa fa-star" aria-hidden="true"></i>
								@else
									<i class="fa fa-star-o" aria-hidden="true"></i>
								@endif
								@if($review->rate>=2)
									<i class="fa fa-star" aria-hidden="true"></i>
								@else
									<i class="fa fa-star-o"></i>
								@endif
								@if($review->rate>=3)
									<i class="fa fa-star" aria-hidden="true"></i>
								@else
									<i class="fa fa-star-o" aria-hidden="true"></i>
								@endif
								@if($review->rate>=4)
									<i class="fa fa-star" aria-hidden="true"></i>
								@else
									<i class="fa fa-star-o" aria-hidden="true"></i>
								@endif
								@if($review->rate>=5)
									<i class="fa fa-star" aria-hidden="true"></i>
								@else
									<i class="fa fa-star-o" aria-hidden="true"></i>
								@endif
							</span>
						</div>
						<p>
							{{$review->comment}}
						</p>
					</div>
				</li>
				<!-- End Comment Item -->
			@endforeach
			</ul>


			<!-- Add Review -->
			<div class="mb-20" id="reviewboxform">
				<h3 class="section-title align-left mb-10">@lang('product.add-review')</h3>
				<hr class="mt-0 ">
				<!-- Form -->
				<form method="post" action="{{url('/products')}}/{{$product->id}}/review"  class="form post-cmt">
					{{ csrf_field() }}
					<input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
					@guest
					<div class="row mb-20 mb-md-10">
						<div class="col-md-4 mb-md-10">
							<!-- Name -->
							<input type="text" name="name" id="name" class="name input-md form-control" placeholder="{{ __('profile.name')}}" required>
						</div>
						<div class="col-md-4">
							<!-- Email -->
							<input type="email" name="email" id="email" class="email input-md form-control" placeholder="E-{{ __('profile.email')}}*" required>
						</div>
						<div class="col-md-4">
							{{-- Website --}}
							<input type="text" name="website" id="website" class="website input-md form-control" placeholder="Website">
						</div>
					</div>
					@else
					<input type="hidden" id="reviewer_id" name="reviewer_id" value="{{Auth::user()->id}}">
					<input type="hidden" id="name" name="name" value="{{Auth::user()->last_name}} {{Auth::user()->first_name}}">
					<input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
					<input type="hidden" id="website" name="website" value="">
					@endguest
					<div class="row col-md-12 pb-20">
						<span></span>
						<a class="star" id="1-star">
							<i class="danhgia fa fa-star-o"></i>
						</a>
						<a class="star" id="2-star">
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
						</a>
						<a class="star" id="3-star">
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
						</a>
						<a class="star" id="4-star">
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
						</a>
						<a class="star" id="5-star">
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
							<i class="danhgia fa fa-star-o"></i>
						</a>
					</div>
					<div class="row col-md-12" style="display: none">
						<select class="input-md round form-control" id="yourrating" name="rate">
							<option selected>-- Select one --</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<!-- Comment -->
					<div class="mb-30 mb-md-10 ">
						<textarea name="comment" id="comment " class="comt input-md form-control " rows="6 " placeholder="{{ __('product.comment')}}*"></textarea>
					</div>
					<!-- Send Button -->
					<button type="submit" class="btn btn-mod btn-medium btn-round ">
						{{ __('product.send-review') }}
					</button>
				</form>
			</div>
			<!-- End Add Review -->
		</div>

	</div>
</section>
<!-- End Product Review -->


@endsection

@section('scripts')

<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('js/flytocart.js') }}"></script>
<script>
     $(document).ready(function(){      
        $('.add-shoopingcart').click(function() {
            var quantity = $("input[name='quantity']").val();
            $.ajax({
               type:'POST',
               url:'{{ url("/add-to-cart") }}',              
               data: {
                    'id': '{{$product->id}}',//just test
                    'name': '{{$product->name}}',//just test
                    'price': {{$product->price}},//just test
                    'quantity': quantity,//just test
                },
               success:function(response){
                    console.log(response['newCartItemCount']); //debug
					//$('.cartItemCount').html($('.cartItemCount').html().replace (/\((.*?)\)/g,"(" + response['newCartItemCount'] + ")"));
					$('.cartItemCount').html(response['newCartItemCount']);
               },
               error:function(response){
                    console.log(response['newCartItemCount']); //debug
               }
            });
        });
		$('.add-wishlist').click(function() {
			$(this).effect("shake", {
                times: 1
			}, 200);
			
            $.ajax({
               type:'POST',
               url:'{{ url("/add-to-wishlist") }}',              
               data: {
                    'id': '{{$product->id}}',//just test
                    'name': '{{$product->name}}',//just test
                    'price': {{$product->price}},//just test
                    'quantity': 1,//just test
                },
               success:function(response){
					console.log(response['message']); //debug
               },
               error:function(response){
                    console.log(response['message']); //debug
               }
            });
        });
        $('.call').click(function(event) {
            var target = $( event.target );
            var x = document.getElementById("call-number");
            target.text('');
            target.html(x.innerHTML);
//		    if (x.style.display === "none") {
//		        x.style.display = "block";
//		    } else {
//		        x.style.display = "none";
//		    }
		});       	
    });
</script>
@endsection