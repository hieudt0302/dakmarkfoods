<nav class="main-nav stick-fixed">
    <div class="full-wrapper relative clearfix">
        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
            <a href="{{url('/')}}" class="logo">
                <img src="{{ asset('frontend/images/logo.png') }}" alt="DakMark Foods" />
            </a>
        </div>
        <div class="mobile-nav">
            <i class="fa fa-bars"></i>
        </div>
        <!-- Main Menu -->
        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
            <ul class="clearlist">
                <!-- Homapage With Sub -->
                <li>
                    <a href="{{url('/')}}" class="mn-has-sub active">
                        @lang('header.home')
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <!-- Sub Multilevel -->
                    <ul class="mn-sub">
                        <!-- About Us Column -->
                        <li>
                            <a href="{{url('/about')}}">@lang('header.about-us')</a>
                        </li>
                        <!-- End About Us Column -->

                        <!-- Blog Column -->
                        <li>
                            <a href="{{url('/posts')}}">@lang('header.blogs')</a>
                        </li>
                        <!-- End Blog Column -->

                        <!-- Contact Column -->
                        <li>
                            <a href="{{url('/contact')}}">@lang('header.contact')</a>
                        </li>
                        <!-- End Contact Column -->
                    </ul>
                    <!-- End Sub Multilevel -->
                </li>
                <!-- End Homapage With Sub -->

                <!-- Blog menu -->
                @foreach($blog_menu as $menu)
                <li>
                    <a href="{{url('/subject')}}/{{$menu->parent->slug}}/{{$menu->slug}}" class="mn-has-sub">
                    {{$menu->translation->name??$menu->name}}
                    </a>
                </li>  
                @endforeach

                <!-- Product menu -->
                <li>
                    <a class="mn-has-sub">
                    {{$product_menu->translation->name??$product_menu->name}}
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                    <ul class="mn-sub">
                        @foreach($product_menu->GetMenuSubLevel1() as $sub)
                        <li>
                            <a href="{{url('/subject')}}/{{$sub->parent->slug}}/{{$sub->slug}}">
                                <i class="ion-ios-minus-empty"></i>
                                {{$sub->translation->name??$sub->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>


                <!-- Promotion -->
                <li>
                    <a href="{{ url('/promotion')}}">
                        @lang('header.promotion')
                    </a>
                </li>
                <!-- End Promotion -->

                <!-- Divider -->
                <li><a>&nbsp;</a></li>
                <!-- End Divider -->

                <!-- Favorite -->
                <li>
                    <a href="{{ url('/wishlist') }}" class="align-center"><i class="wishlist-icon fa fa-heart-o"></i></a>
                </li>
                <!-- End Favorite -->

                <!-- Search -->
                <li>
                    <a id="site-search" href="#" class="align-center"><i class="fa fa-search"></i></a>
                </li>
                <!-- End Search -->

                <!-- Cart -->
                <li>
                    <a href="{{ url('/cart') }}" class="align-center"><i class="fa fa-shopping-cart shopping-cart-icon"></i></a>
                </li>
                <!-- End Cart -->

                <!-- User -->
                <li>
                    <a href="#" class="mn-has-sub align-center"><i class="fa fa-user-circle-o"></i> <i class="fa fa-angle-down"></i></a>
                    <!-- Sub Multilevel -->
                    <ul class="mn-sub">
                        <!-- Sub Column -->
                        <li><a href="{{ url('/login') }}">@lang('auth.login')</a></li>
                        <li><a href="{{ url('/register') }}">@lang('auth.register')</a></li>
                        <!-- End Sub Column -->
                    </ul>
                    <!-- End Sub Multilevel -->
                </li>
                <!-- End User -->

                <!-- Languages -->
                <li>
                    <a href="#" class="mn-has-sub align-center">
                        <i class="fa fa-globe"></i>&nbsp;
                        {{ strtoupper(app()->getLocale()) }}
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <!-- Sub Multilevel -->
                    <ul class="mn-sub">
                        <!-- Sub Column -->
                        <li>
                            <a href="{{URL::asset('')}}language/vi">
                                Tiếng Việt
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::asset('')}}language/en">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::asset('')}}language/cn">
                                中文
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::asset('')}}language/jp">
                                日本語
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::asset('')}}language/kr">
                                한국어
                            </a>
                        </li>
                        <!-- End Sub Column -->
                    </ul>
                    <!-- End Sub Multilevel -->
                </li>
                <!-- End Languages -->
            </ul>
        </div>
        <!-- End Main Menu -->
    </div>
</nav>