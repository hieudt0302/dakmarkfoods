@extends('layouts.master')
@section('title', $post->title) 

@section('content')

    <!-- Head Section -->
    <section class="small-section" data-background="{{ asset('/frontend/images/home-sample/about.jpg') }}">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="hs-line-11 mb-20 mb-xs-0">{{$post->translation->title}}</h1>
                    <div class="hs-line-4 black">
                    </div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="mod-breadcrumbs align-right">
                        <a href="{{url('/')}}">@lang('header.home')</a>&nbsp;/&nbsp;<a href="{{url('/blog')}}">@lang('blog.blog')</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Head Section -->
    {{--{{ dd($categories) }}--}}

    <!-- Blog Section -->
    <section class="small-section postlist">
        <div class="container relative">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12 mb-30">
                    <!-- Post -->
                    <div class="blog-item mb-80 mb-xs-40">
                        <div class="blog-item-data local-scroll">
                            <a href="#"><i class="fa fa-clock-o"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</a>
                            <span class="separator">&nbsp;</span>
                            <a href="#"><i class="fa fa-user"></i> {{$post->author->last_name}} {{$post->author->first_name}}</a>
                            <span class="separator">&nbsp;</span>
                            <i class="fa fa-folder-open"></i>
                            {{ $post->category->name }}
                            <span class="separator">&nbsp;</span>
                            <a href="#commentbox"><i class="fa fa-comments"></i> ({{count($post->comments)}}) {{ __('blog.comment') }}</a>
                        </div>
                        <!-- Text -->
                        <div class="blog-item-body">
                            {!! $post->translation->content !!}

                            <hr>
                            <div class="tags">Tags:
                                @foreach($post->tags as $tag)
                                    <a href="#">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Text -->
                    </div>
                    <!-- End Post -->

                    <!-- Comments -->
                    <div class="mb-80 mb-xs-40 local-scroll" id="commentbox">
                        <h3 class="section-title align-left mb-10 ">({{count($post->comments)}}) {{ __('blog.comment') }}<a href="#commentboxform" class="section-more right ">@lang('blog.leave-a-comment')</a></h3>
                        <hr class="mt-0 ">
                        <ul class="media-list text comment-list clearlist">
                            <!-- Comment Item -->
                            @foreach($post->comments as  $comment)
                            <li class="media comment-item">
                                <a class="pull-left" href="#"><img class="media-object comment-avatar" src="{{asset('frontend/images/user-avatar.png')}}" alt="" width="50" height="50"></a>
                                <div class="media-body">
                                    <div class="comment-item-data">
                                        <div class="comment-author">
                                            <a href="#">{{$comment->name}}</a>
                                        </div>
                                        {{$comment->created_at}}<span class="separator">&mdash;</span>
                                        <a href="#"><i class="fa fa-comment"></i>&nbsp;Reply</a>
                                    </div>
                                    <p>
                                        {{$comment->comment}}
                                    </p>

                                </div>
                            </li>
                            @endforeach
                            <!-- End Comment Item -->
                        </ul>
                    </div>
                    <!-- End Comments -->

                    <!-- Add Comment -->
                    <div class="mb-80 mb-xs-40" id="commentboxform">
                        <h4 class="blog-page-title">@lang('blog.leave-a-comment')</h4>
                        <!-- Form -->
                        <form class="form post-cmt" method="post" action="{{url('/posts')}}/{{$post->slug}}/comment" id="form" role="form">
                            {{ csrf_field() }}
                            @guest
                            <div class="row mb-20 mb-md-10">
                                <div class="col-md-6 mb-md-10">
                                    <!-- Name -->
                                    <input type="text" name="name" id="name" class="input-md form-control" placeholder="{{ __('blog.name') }} *" required>
                                </div>
                                <div class="col-md-6">
                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class="input-md form-control" placeholder="{{ __('blog.email') }} *" required>
                                </div>
                            </div>
                            @else
                                <input type="hidden" id="reader_id" name="reader_id" value="{{Auth::user()->id}}">
                                <input type="hidden" id="name" name="name" value="{{Auth::user()->last_name}} {{Auth::user()->first_name}}">
                                <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
                            @endguest
                                <!-- Comment -->
                            <div class="mb-30 mb-md-10">
                                <textarea name="comment" id="comment" class="comt input-md form-control" rows="6" placeholder="{{ __('blog.comment') }}*"></textarea>
                            </div>
                            <!-- Send Button -->
                            <button type="submit" class="submit btn btn-mod btn-medium btn-round btn-round">
                                {{ __('blog.send-comment') }}
                            </button>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Add Comment -->

                </div>

                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="widget">
                        {!! Form::open(array('url' => '/search', 'class' => 'form-inline form')) !!}
                        <div class="search-wrap">
                            <button class="search-button animate" type="submit" title="@lang('header.search')">
                                <i class="fa fa-search"></i>
                            </button>
                            <input type="text" class="form-control search-field" placeholder="@lang('header.enter-keyword')">
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="widget cats">
                        <h5 class="widget-title">CHUYÊN MỤC (CHƯA CÓ TRONG LANG)</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-menu">
                                @foreach($categories as $cat)
                                <li>
                                    <a href="{{url('/blog')}}/{{$cat->slug}}" title="">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>  {{$cat->name}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Widget -->
                    <div class="widget">
                        <h5 class="widget-title">@lang('blog.last-posts')</h5>
                        <div class="widget-body">
                            <ul class="clearlist widget-posts">
                                @foreach($last_posts as $recentpost)
                                <li class="clearfix">
                                    <a href="{{url('/posts')}}/{{$recentpost->slug}}"><img src="{{ asset('images/blog/' . $recentpost->img) }}" alt="" class="widget-posts-img" /></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title="">{{$recentpost->translation->title}}</a> @lang('blog.posted-by') {{$recentpost->author->first_name}}<br/>@lang('blog.posted-on'){{ date('d-m-Y', strtotime($recentpost->created_at)) }}
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Widget -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->
@endsection