@extends('layouts.master')
@section('title','Dakmark foods - Post') 

@section('content')

    <!-- Head Section -->
    <section class="small-section" data-background="{{ asset('/frontend/images/home-sample/about.jpg') }}">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('header.blog')</h1>
                    <div class="hs-line-4 black">

                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs align-right">
                        <a href="{{url('/')}}">@lang('header.home')</a>&nbsp;/&nbsp;@lang('header.blog')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Head Section -->
    <!-- Blog Section -->
    <section class="small-section postlist">
        <div class="container relative">
            <div class="row">
                <!-- Post List-->
                <div class="col-md-9 col-sm-8 col-xs-12 mb-30">
                @foreach($post_group as $cat_id => $posts)
                    {{$cat_id}}
                    @foreach($posts as $post)

                    <!-- Post -->
                    <div class="blog-item">
                        <!-- Post Title -->
                        <h2 class="blog-item-title"><a href="{{url('/posts')}}/{{$post->slug}}">{{$post->translation->title}}</a></h2>
                        <!-- Author, Categories, Comments -->
                        <div class="blog-item-data">
                            <a href="#"><i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> {{$post->author->first_name}}</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            @foreach ($post->tags as $tag)
                                <a href="">{{$tag->name}}</a>,
                            @endforeach
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-comments"></i> {{count($post->comments)}} @lang('blog.comment)</a>
                        </div>
                        <!-- Media Gallery -->
                        <div class="blog-media">
                            {{--<a href="{{url('/')}}/posts/{{$post->slug}}"><img src="{{ asset('images/blog/' . $post->img) }}" alt="" /></a>--}}
                        </div>
                        <!-- Text Intro -->
                        <div class="blog-item-body">
                            <p>
                                {{$post->translation->excerpt}}
                            </p>
                        </div>
                        <!-- Read More Link -->
                        <div class="blog-item-foot">
                            <a href="{{url('/posts')}}/{{$post->slug}}" class="btn btn-mod btn-gray btn-round"> Read more <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End Post -->

                    @endforeach
                @endforeach
                    {{--<!-- Post Pagination-->--}}
                    {{--<div class="pagination">--}}
                        {{--<a href=""><i class="fa fa-angle-left"></i></a>--}}
                        {{--<a href="" class="active">1</a>--}}
                        {{--<a href="">2</a>--}}
                        {{--<a href="">3</a>--}}
                        {{--<a class="no-active">...</a>--}}
                        {{--<a href="">9</a>--}}
                        {{--<a href=""><i class="fa fa-angle-right"></i></a>--}}
                    {{--</div>--}}
                    {{--<!-- End Post Pagination-->--}}

                </div>

                <!-- End Post List-->

                <!-- Widget -->
                <div class="col-md-3 col-sm-4 col-xs-12">

                    <div class="widget">
                        <form class="form-inline form" role="form">
                            <div class="search-wrap">
                                <button class="search-button animate" type="submit" title="Tìm Kiếm">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control search-field" placeholder="Tìm kiếm...">
                            </div>
                        </form>
                    </div>

                    <div class="widget cats">
                        <h5 class="widget-title">DANH MỤC SẢN PHẨM</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>  Kinh nghiệm
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>  Chia sẻ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>  Nội trợ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="widget">
                        <h5 class="widget-title">BÀI VIẾT MỚI</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                <li class="clearfix">
                                    <a href=""><img src="images/home-sample/cats/thumb.jpg" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Minimalistic Design Forever</a> Posted by John Doe 7 Mar
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href=""><img src="images/home-sample/cats/thumb.jpg" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Ipsum dolor sit amet, consectetur adipiscing elit</a> Posted by John Doe 7 Mar
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href=""><img src="images/home-sample/cats/thumb.jpg" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">New Web Design Trends in 2015 year</a> Posted by John Doe 7 Mar
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href=""><img src="images/home-sample/cats/thumb.jpg" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Hipster’s Style in Web Design and Logo</a> Posted by John Doe 7 Mar
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <a href=""><img src="images/home-sample/cats/thumb.jpg" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">Duis tristique condimentum nulla, bibendum consectetu</a> Posted by John Doe 7 Mar
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- End Widget -->
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection