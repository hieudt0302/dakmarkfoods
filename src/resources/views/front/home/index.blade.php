@extends('layouts.master')
@section('title','Pokofarms - Home')
@section('content')

    <!-- Futured Slider -->
    @include('front.home.featuredslider')
    <!-- End Futured Slider -->

    <!-- Best Seller -->
    @include('front.home.product_section_bestseller')
    <!-- End Best Seller -->

    <!-- New Product with Carousel -->
    @include('front.home.product_section_newproduct')
    <!-- End New Product with Carousel -->

    <!-- Sales Product with Carousel -->
    @include('front.home.product_section_salesproduct')
    <!-- End Sales Product with Carousel -->

    <!-- News -->
    @include('front.home.product_section_news')
    <!-- End News -->
    
@endsection