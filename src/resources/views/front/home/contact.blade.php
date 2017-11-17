
@extends('layouts.master')
@section('title','Pokofarms - '.__('header.contact'))
@section('content')

<!-- Head Section -->
<section class="small-section pt-60 pb-20 bg-gray-lighter">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('header.contact')</h1>
                <div class="hs-line-4 black">
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs align-right">
                    <a href="{{url('/')}}">@lang('header.home')</a>&nbsp;/&nbsp;@lang('header.contact')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Head Section -->

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">
        <h2 class="section-title mb-70 mb-sm-40">
            @lang('contact.review')
        </h2>
        <div class="row mb-60 mb-xs-40">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title">
                                @lang('contact.phone')
                            </div>
                            <div class="ci-text">
                                <a href="tel:{{ Setting::config('phone') }}">{{ Setting::config('phone') }}</a><br>
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->
                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title">
                                @lang('contact.address')
                            </div>
                            <div class="ci-text">
                                {{ Setting::config('address') }}
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->
                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title">
                                Email
                            </div>
                            <div class="ci-text">
                                <a href="mailto:pokofarms@pokofarms.com.vn">{{ Setting::config('email') }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->
                </div>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
                {!! Form::open(array('route' => 'front.send-contact', 'class' => 'form post-cmt contact-form')) !!}
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control" placeholder="@lang('contact.name')*" pattern=".{3,100}" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control" placeholder="@lang('contact.email')*" pattern=".{5,100}" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="phone" id="phone" class="input-md round form-control" placeholder="@lang('contact.phone')">
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Message -->
                            <div class="form-group">
                                <textarea name="message" id="message" class="input-md round form-control" style="height: 130px;" placeholder="@lang('contact.message')*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="cf-left-col">
                            <!-- Inform Tip -->
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> @lang('contact.required-message')
                            </div>
                        </div>
                        <div class="cf-right-col">
                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">@lang('contact.submit')</button>
                            </div>
                        </div>
                    </div>
                    <div id="result"></div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- End Contact Form -->
    </div>
</section>
<!-- End Contact Section -->

<!-- Google Map -->
<div class="google-map">
    <div data-address="{{ Setting::config('address') }}" id="map-canvas"></div>
    <div class="map-section">
        <div class="map-toggle">
            <div class="mt-icon">
                <i class="fa fa-map-marker"></i>
            </div>
            <div class="mt-text font-alt">
                <div class="mt-open">@lang('common.open-map') <i class="fa fa-angle-down"></i></div>
                <div class="mt-close">@lang('common.close-map') <i class="fa fa-angle-up"></i></div>
            </div>
        </div>
    </div>
</div>
<!-- End Google Map -->

@endsection
