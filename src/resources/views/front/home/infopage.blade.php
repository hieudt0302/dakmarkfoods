@extends('layouts.master')
@section('title','Dakmark foods - '.__('header.about-us'))
@section('content')

<!-- Head Section -->
<section class="small-section pt-60 pb-20 bg-gray-lighter">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 mb-20 mb-xs-0">{{$info_page_translation->title}}</h1>
                <div class="hs-line-4 black">
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs align-right">
                    <a href="{{url('/')}}">@lang('header.home')</a>&nbsp;/&nbsp;{{$info_page_translation->title}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Head Section -->

<!-- Info Page Section -->
<section class="small-section" id="about">
    <div class="container relative">
        <div class="section-text mb-50 mb-sm-20">
            {!! $info_page_translation->content !!}
        </div>
    </div>
</section>
<!-- End Info Page Section -->

@endsection