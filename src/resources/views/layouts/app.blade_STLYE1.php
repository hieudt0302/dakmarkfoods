<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/images/apple-touch-icon-114x114.png')}}">
    
    <!-- CSS -->        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vertical-rhythm.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/rev-slider.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('frontend/rs-plugin/css/settings.css') }}" media="screen" />  
    
</head>
<body>

    <!-- Page Loader -->        
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- End Page Loader -->
    
    <!-- Page Wrap -->
    <div class="page" id="top">
        <!-- SITE LANGUAGE -->
        <div class="lang-select-content">
            <ul class="lang-select-list">
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-vn"></i> Tiếng Việt </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-us"></i> English </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-cn"></i> 中文 </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-jp"></i> 日本語 </i></a></li>
                <li><a href="#" class="lang-select"><i class="flag-icon flag-icon-kr"></i> 한국어 </i></a></li>
            </ul>
        </div>
        <!-- END SITE LANGUAGE -->
        <!-- Top Bar -->
        <div class="top-bar ">
            <div class="full-wrapper clearfix">
                <!-- Top Links -->
                <ul class="top-links left">
                    <li><a href="tel:+841223338889" data-original-title="" title="">GIỚI THIỆU</a></li>
                    <li><a href="tel:+841223338889" data-original-title="" title="">BLOG</a></li>
                    <li><a href="tel:+841223338889" data-original-title="" title="">LIÊN HỆ</a></li>
                </ul>
                <!-- End Top Links -->
                <!-- Social Links -->
                <ul class="top-links right tooltip-bot" data-original-title="" title="">
                    <li>
                        <a id="lang-select" href="#"><i class="flag-icon flag-icon-vn"></i></a>
                    </li>
                </ul>
                <!-- End Social Links -->
            </div>
        </div>
        <!-- End Top Bar -->
        <!-- Logo Section -->
        <section class="small-section pt-30 pt-xs-20 pb-30 pb-xs-20">
            <div class="container align-center">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <a href="#top"><img src="{{ asset('frontend/images/DakMark-foods.png') }}" width="300" height="125" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        <!-- MENU -->
        <div id="sticky-wrapper" class="sticky-wrapper">
            <nav class="main-nav dark mn-align-left js-stick" style="width: 1325px;">
                <div class="full-wrapper relative clearfix">
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist">
                            <!-- Item With Sub -->
                            <li>
                                <a href="index.html" class="active">TRANG CHỦ</a>
                            </li>
                            <!-- End Item With Sub -->
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">NÔNG SẢN <i class="fa fa-angle-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#">History</a>
                                    </li>
                                    <li>
                                        <a href="#">Mission</a>
                                    </li>
                                    <li>
                                        <a href="#">Vision</a>
                                    </li>
                                </ul>
                                <!-- End Sub -->
                            </li>
                            <!-- End Item With Sub -->
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">ĐẶC SẢN <i class="fa fa-angle-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#">History</a>
                                    </li>
                                    <li>
                                        <a href="#">Mission</a>
                                    </li>
                                    <li>
                                        <a href="#">Vision</a>
                                    </li>
                                </ul>
                                <!-- End Sub -->
                            </li>
                            <!-- End Item With Sub -->
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">ĐẶC BIỆT <i class="fa fa-angle-down"></i></a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#">History</a>
                                    </li>
                                    <li>
                                        <a href="#">Mission</a>
                                    </li>
                                    <li>
                                        <a href="#">Vision</a>
                                    </li>
                                </ul>
                                <!-- End Sub -->
                            </li>
                            <!-- End Item With Sub -->
                            <li>
                                <a href="special-construction-1-portfolio.html">KHUYẾN MÃI</a>
                            </li>
                            <li class="right">
                                <a href="#" class="mn-has-sub"><i class="fa fa-user-circle-o"></i> Tài Khoản</a>
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    <li>
                                        <a href="#">Đăng Nhập</a>
                                    </li>
                                    <li>
                                        <a href="#">Đăng Ký</a>
                                    </li>
                                </ul>
                                <!-- End Sub -->
                            </li>
                            <li class="right">
                                <a href="#" class="mn-has-sub"><i class="fa fa-search"></i> Tìm Kiếm</a>
                                <ul class="mn-sub">
                                    <li>
                                        <div class="mn-wrap">
                                            <form method="post" class="form">
                                                <div class="search-wrap">
                                                    <button class="search-button animate" type="submit" title="Start Search">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                    <input type="text" class="form-control search-field" placeholder="Search...">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="right">
                                <a href="#"><i class="fa fa-shopping-cart"></i> Giỏ Hàng (0)</a>
                            </li>
                            <li class="right">
                                <a href="#"><i class="fa fa-heart-o"></i> Yêu Thích</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Main Menu -->
                </div>
            </nav>
        </div>
        <!-- End Menu -->
        <!-- Fullwidth Slider -->
        <div class="home-section fullwidth-slider bg-dark" id="home">
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-30" data-background="{{ asset('frontend/images/home-sample/01.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <div class="hs-line-8 no-transp mb-40 mb-xs-10">
                                Hello & Welcome
                            </div>
                            <div class="hs-line-14 mb-50 mb-xs-10">
                                We are Rhythm
                            </div>
                            <div class="local-scroll">
                                <a href="pages-pricing-1.html" class="btn btn-mod btn-border-w btn-circle btn-small">Get Pricing</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="#about" class="btn btn-mod btn-border-w btn-circle btn-small">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-30" data-background="{{ asset('frontend/images/home-sample/02.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <h1 class="hs-line-8 no-transp mb-50 mb-xs-10">
                                    We Are just crative people
                                </h1>
                            <h2 class="hs-line-14 mb-50 mb-xs-10">
                                    Rhythm Creative Studio
                                </h2>
                            <div class="local-scroll">
                                <a href="#about" class="btn btn-mod btn-border-w btn-small btn-circle hidden-xs">See More</a>
                                <span class="hidden-xs">&nbsp;</span>
                                <a href="http://vimeo.com/50201327" class="btn btn-mod btn-border-w btn-small btn-circle lightbox mfp-iframe">Play Reel</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
            <!-- Slide Item -->
            <section class="home-section bg-scroll fixed-height-small bg-dark-alfa-30" data-background="{{ asset('frontend/images/home-sample/03.jpg') }}">
                <div class="js-height-parent container">
                    <!-- Hero Content -->
                    <div class="home-content">
                        <div class="home-text">
                            <h2 class="hs-line-8 no-transp mb-50 mb-xs-10">
                                    Create your dream with
                                </h2>
                            <h1 class="hs-line-14 mb-50 mb-xs-10">
                                    Amazing Design
                                </h1>
                            <div>
                                <a href="pages-pricing-1.html" class="btn btn-mod btn-border-w btn-small btn-circle">Get Pricing</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Content -->
                </div>
            </section>
            <!-- End Slide Item -->
        </div>
        <!-- End Fullwidth Slider -->
        <!-- Product -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title mb-30 mb-sm-40">SẢN PHẨM MUA NHIỀU</h2>
                <div class="row multi-columns-row">
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt=""></a>
                            <div class="intro-label">
                                <span class="label label-danger bg-red">30%</span>
                            </div>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">G-Star Polo Applique Jersey</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <del>$150.00</del>
                            &nbsp;
                            <strong>$94.75</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Only &amp; Sons Pique Polo Shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$28.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Longline Long Sleeve T-shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$39.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$85.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                </div>
                <div class="align-center">
                    <a href="" class="btn btn-mod btn-round btn-medium">XEM THÊM</a>
                </div>
            </div>
        </section>
        <!-- End Product -->
        <!-- Product -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title mb-30 mb-sm-40">SẢN PHẨM MỚI</h2>
                <div class="row multi-columns-row">
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt=""></a>
                            <div class="intro-label">
                                <span class="label label-danger bg-red">30%</span>
                            </div>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">G-Star Polo Applique Jersey</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <del>$150.00</del>
                            &nbsp;
                            <strong>$94.75</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Only &amp; Sons Pique Polo Shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$28.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Longline Long Sleeve T-shirt</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$39.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                    <!-- Shop Item -->
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-20">
                        <div class="post-prev-img">
                            <a href="shop-single.html"><img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title align-center">
                            <a href="shop-single.html">Polo Shirt With Floral Sleeves</a>
                        </div>
                        <div class="post-prev-text align-center mb-0">
                            <strong>$85.99</strong>
                        </div>
                    </div>
                    <!-- End Shop Item -->
                </div>
                <div class="align-center">
                    <a href="" class="btn btn-mod btn-round btn-medium">XEM THÊM</a>
                </div>
            </div>
        </section>
        <!-- End Product -->
        <!-- Product -->
        <section class="small-section pt-20 pb-20 bg-dark-lighter danhmucsp">
            <div class="container relative">
                <h2 class="section-title mb-30 mb-sm-40">DANH MỤC SẢN PHẨM</h2>
                <div class="row multi-columns-row">
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt"" class="cat-thumb">
                                <div class="cat-des">
                                    HOA QUẢ TƯƠI
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HẠT COFFEE
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fruit.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HOA QUẢ TƯƠI
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/coffee.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    HẠT COFFEE
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/meat.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    THỊT TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                    <!-- Cat Item -->
                    <div class="col-xs-4 col-sm-3 col-md-2 col-lg-2 pt-20">
                        <div class="cat-detail">
                            <a href="shop-single.html">
                                <img src="{{ asset('frontend/images/home-sample/cats/fish.jpg') }}" alt="" class="cat-thumb">
                                <div class="cat-des">
                                    CÁ TƯƠI SỐNG
                                    <span class="sub">100 Sản Phẩm</span>
                                </div>

                            </a>
                        </div>
                    </div>
                    <!-- End Cat Item -->
                </div>
            </div>
        </section>
        <!-- End Product -->
        <!-- Product -->
        <section class="small-section pt-50 pb-30">
            <div class="container relative">
                <h2 class="section-title mb-30 mb-sm-40">TIN TỨC/KHUYẾN MÃI</h2>
                <div class="row multi-columns-row">
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/hq.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/gift.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/hot.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                    <!-- Post Item -->
                    <div class="col-sm-6 col-md-3 col-lg-3 mb-60 mb-xs-40">
                        <div class="post-prev-img">
                            <a href="blog-single-sidebar-right.html"><img src="{{ asset('frontend/images/home-sample/tb.jpg') }}" alt=""></a>
                        </div>
                        <div class="post-prev-title ">
                            <a href="">ĐÂY LÀ TIÊU ĐỀ</a>
                        </div>
                        <div class="post-prev-info ">
                            <a href="">Tuấn, Hiếu</a> | 30/10
                        </div>
                        <div class="post-prev-text">
                            Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
                        </div>
                        <div class="post-prev-more">
                            <a href="" class="btn btn-mod btn-gray btn-round">Đọc Ngay <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post Item -->
                </div>
            </div>
        </section>
        <!-- End Product -->
        <section class="small-section bg-dark-lighter">
            <div class="container relative">
                
                <form class="form align-center" id="mailchimp" novalidate="true">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            
                            <div class="newsletter-label">
                                ĐĂNG KÝ NHẬN BẢN TIN
                            </div>
                            
                            <div class="mb-20">
                                <input placeholder="Enter Your Email" class="newsletter-field form-control input-md round mb-xs-10" type="email" pattern=".{5,100}" required="" name="EMAIL">
                                
                                <button type="submit" class="btn btn-mod btn-medium btn-w btn-round mb-xs-10">
                                    Subscribe
                                </button>
                            </div>
                            
                            <div class="form-tip">
                                <i class="fa fa-info-circle"></i> Chúng tôi sẻ không spam
                            </div>
                            
                            <div id="subscribe-result"></div>
                            
                        </div>
                    </div>
                </form>
                
            </div>
        </section>
        <!-- Foter -->
        <footer class="page-section bg-gray-lighter footer pb-20 pt-30 align-left">
            <div class="container">
                <div class="row align-left">
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">DAKMARK FOODS</h5>
                            <div class="widget-body">
                                <ul class="clearlist widget-menu">
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Giới Thiệu</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Điều Khoản</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Liên Hệ</a>
                                    </li>
                                </ul>
                                <div class="mb-20 mt-20">
                                    <strong>ĐƯỢC CHỨNG NHẬN</strong>
                                    <a target="_blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=21571" rel="nofollow"><img alt="" title="" src="{{ asset('frontend/images/home-sample/1492058103818_8888090.png') }}" class="img-responsive"></a>
                                    <a target="_blank" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=21571" rel="nofollow"><img alt="" title="" src="{{ asset('frontend/images/home-sample/bo-cong-thuong.da-dang-ky.png') }}" class="img-responsive"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">HỖ TRỢ KHÁCH HÀNG</h5>
                            <div class="widget-body">
                                <ul class="clearlist widget-menu">
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Kiểm tra đơn hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách thanh toán</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách giao hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Chính sách đổi/trả hàng</a>
                                    </li>
                                    <li>
                                        <a href="#" title=""><i class="fa fa-angle-right"></i> Câu hỏi thường gặp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">PHƯƠNG THỨC THANH TOÁN</h5>
                            <div class="widget-body">
                                <div class="phuongthucthanhtoan">
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-visa.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-mastercard.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-jcb.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-cash.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-internet-banking.svg">
                                    </span>
                                    <span class="payment pb-10">
                                        <img src="https://vcdn.tikicdn.com/assets/img/svg/ic-installment.svg">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <!-- End Widget -->
                    <!-- Widget -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget">
                            <h5 class="widget-title">CHI NHÁNH</h5>
                            <div class="widget-body">
                                <div class="widget-text clearfix">
                                    <div class="mb-20">CÔNG TY CỔ PHẦN DỊCH VỤ THƯƠNG MẠI DAKMARK</div>
                                    <div class="mb-20">
                                        <strong>TRỤ SỞ CHÍNH</strong>
                                        <p>Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</p>
                                    </div>
                                    <div class="mb-20">
                                        <strong>VĂN PHÒNG ĐẠI DIỆN</strong>
                                        <p>Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh, Việt Nam</p>
                                    </div>
                                    <div class="footer-social-links">
                                        <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                                        <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
            </div>
            <!-- Top Link -->
            <div class="local-scroll">
                <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
            </div>
            <!-- End Top Link -->
        </footer>
        <!-- End Foter -->
    </div>

    <!-- <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>        
    <script type="text/javascript" src="{{ asset('frontend/js/SmoothScroll.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.scrollTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.localScroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.viewport.mini.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.fitvids.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
    **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/gmap3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.simple-text-rotator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/all.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/contact-form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/rev-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/custom-js.js') }}"></script>
    <!-- FACEBOOK SUPPORT CHAT -->
    <script type="text/javascript">
    (function(d, s, id) {
        var z = d.createElement(s);
        z.type = "text/javascript";
        z.id = id;
        z.async = true;
        z.src = "//static.zotabox.com/2/a/2a6fc4c8863090a636c3e219109dbbc9/widgets.js";
        var sz = d.getElementsByTagName(s)[0];
        sz.parentNode.insertBefore(z, sz)
    }(document, "script", "zb-embed-code"));
    </script>
</body>
</html>
