<section class="small-section pt-50 pb-30">
    <div class="container relative">
        <h2 class="section-title align-left mb-30 mb-sm-40">
            @lang('home.our-blogs')
            <a href="{{url('/blog')}}" class="section-more right">@lang('common.see-more') <i class="fa fa-angle-right"></i></a>
        </h2>
        <div class="row multi-columns-row">
            @foreach($new_blogs as $news)
{{--                {{ dd($news) }}--}}
            <!-- Post Item -->
            <div class="col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn">
                <div class="post-prev-img">
                    <a href="{{url('/posts')}}/{{$news->slug}}">
                        <img src="{{ asset('/storage/images/blog/preview/') }}/{{$news->img??'images/no-image.png'}}" alt="">
                    </a>
                </div>
                <div class="post-prev-title ">
                    <a href="{{url('/posts')}}/{{$news->slug}}">{{$news->translation->title}}</a>
                </div>
                <div class="post-prev-info ">
                    {{$news->author->last_name}} {{$news->author->first_name}} | {{ date('d-m-Y', strtotime($news->created_at)) }}
                </div>
                <div class="post-prev-text">
                    {{$news->excerpt}}
                </div>
                <div class="post-prev-more">
                    <a href="{{url('/posts')}}/{{$news->slug}}" class="btn btn-mod btn-gray btn-round">@lang('common.read-more') <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- End Post Item -->
            @endforeach
        </div>
    </div>
</section>
