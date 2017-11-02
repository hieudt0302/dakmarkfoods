
@extends('layouts.master')
@section('title','Pokofarms - '.__('header.contact'))
@section('content')

<!-- Head Section -->
<section class="small-section pt-100 pb-100" data-background="{{ asset('/frontend/images/home-sample/about.jpg') }}">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('header.contact')</h1>
                <div class="hs-line-4 black">
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs align-right">
                    <a href="{{url('/')}}">Trang Chủ</a>&nbsp;/&nbsp;@lang('header.contact')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Head Section -->

<!-- Contact Section -->
<section class="small-section contact" id="contact">
    <div class="container relative">
        @include('notifications.status_message')
        @include('notifications.errors_message')
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif
        <div class="section-text mb-50 mb-sm-20">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-left">
                        <div class="ct-it">
                            <h3>@lang('contact.address')</h3> @lang('common.headquarter-address')
                            <hr>
                        </div>
                        <div class="ct-it">
                            <h3>@lang('contact.phone')</h3>
                            <p>Mobile: (+88) - 1990 - 6886<br>
                                Hotline: 1800 - 1102</p>
                            <hr>
                        </div>
                        <div class="ct-it">
                            <h3>@lang('contact.email')</h3>
                            <p>pokofarms@pokofarms.com.vn</p>
                            <hr>
                        </div>
                        <div class="ct-it ct-icon">
                            <h3>@lang('contact.social')</h3>
                            <br>
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
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="contact-form blogsingle-content">
                        <!-- comment form -->
                        {!! Form::open(array('route' => 'front.send-contact', 'class' => 'form post-cmt')) !!}
                            <h3>@lang('contact.review')</h3>
                            <div class="row mb-20 mb-md-10">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="name" class="name input-md form-control" placeholder="@lang('contact.name')">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="email" class="email input-md form-control" placeholder="@lang('contact.email')*">
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <input type="text" name="phone" class="phone input-md form-control" placeholder="@lang('contact.phone')">
                                </div>
                            </div>
                            <div class="row mb-20 mb-md-10">
                                <div class="col-md-12 col-xs-12 col-sm-12">
                                    <textarea name="message" id="text" class="comt input-md form-control" rows="8" placeholder="@lang('contact.message')*"></textarea>
                                </div>
                            </div>
                            <div class="clearfix">
                                <input class="submit btn btn-mod btn-circle btn-large" type="submit" value="@lang('contact.submit')">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->
@endsection
