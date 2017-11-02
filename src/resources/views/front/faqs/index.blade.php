

@extends('layouts.master')
@section('title','Poko Farms - FAQ')
@section('content')

<!-- Head Section -->
<section class="small-section pt-100 pb-100" data-background="{{ asset('/frontend/images/home-sample/about.jpg') }}">
    <div class="relative container align-left">
        <div class="row">
            <div class="col-md-8">
                <h1 class="hs-line-11 mb-20 mb-xs-0">@lang('common.faq')</h1>
                <div class="hs-line-4 black">
                </div>
            </div>
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs align-right">
                    <a href="{{url('/')}}">Trang Chủ</a>&nbsp;/&nbsp;@lang('common.faq')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Head Section -->

<!-- FAQ Section -->
<section class="small-section contact" id="contact">
    <div class="container relative">
        <div class="section-text mb-50 mb-sm-20">
            <dl class="accordion">
                @foreach ($faqs as $faq)
                <dt>
                    <a href="#" class="active">{{$faq->translation->question}}</a>
                </dt>
                <dd>
                    {{$faq->translation->answer}}
                </dd>
                @endforeach
            </dl>
        </div>
    </div>
</section>
<!-- End FAQ Section -->

{{--<div class="aboutplantads">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="plantads-r">--}}
                    {{--<div class="panel-group" id="accordion">--}}
                        {{--@foreach ($faqs as $faq)--}}
                        {{--<div class="panel panel-default">--}}
                           {{--<div class="panel-heading">--}}
                              {{--<h4 class="panel-title">--}}
                                 {{--<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{$faq->id}}">--}}
                                 {{--{{$faq->translation->question}}--}}
                                 {{--</a>--}}
                              {{--</h4>--}}
                           {{--</div><!--/.panel-heading -->--}}
                           {{--<div id="collapse-{{$faq->id}}" class="panel-collapse collapse">--}}
                              {{--<div class="panel-body">--}}
                                 {{--<p>{{$faq->translation->answer}}</p>--}}
                              {{--</div><!--/.panel-body -->--}}
                           {{--</div><!--/.panel-collapse -->--}}
                        {{--</div><!-- /.panel --> --}}
                        {{--@endforeach                       --}}
                    {{--</div><!-- /.panel-group -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
