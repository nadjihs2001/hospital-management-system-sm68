@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.blog') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.blog') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="our-blogs">
                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-1.jpg')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span>August 25, 2023</li>
                                        <li><span class="icon flaticon-comment"></span>3 Comments</li>
                                    </ul>
                                    <h3><a href="{{ url('blog-detail') }}">In this hospital there are special surgeon</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</div>
                                    <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-2.jpg')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span>August 24, 2023</li>
                                        <li><span class="icon flaticon-comment"></span>5 Comments</li>
                                    </ul>
                                    <h3><a href="{{ url('blog-detail') }}">World AIDS Day, designated on 1 December</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</div>
                                    <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-3.jpg')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span>August 23, 2023</li>
                                        <li><span class="icon flaticon-comment"></span>2 Comments</li>
                                    </ul>
                                    <h3><a href="{{ url('blog-detail') }}">More than 80 clinical trials launch to test coronavirus</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</div>
                                    <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-4.jpg')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span>August 22, 2023</li>
                                        <li><span class="icon flaticon-comment"></span>7 Comments</li>
                                    </ul>
                                    <h3><a href="{{ url('blog-detail') }}">Health Will Be A Thing Of The Past And Here's Why</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</div>
                                    <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- News Block Two -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-5.jpg')}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-meta">
                                        <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                        <li><span class="icon flaticon-calendar-1"></span>August 21, 2023</li>
                                        <li><span class="icon flaticon-comment"></span>4 Comments</li>
                                    </ul>
                                    <h3><a href="{{ url('blog-detail') }}">Integrative Medicine And Oncology</a></h3>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat...</div>
                                    <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Post Share Options -->
                        <div class="styled-pagination text-center">
                            <ul class="clearfix">
                                <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="{{ trans('website.search') }}" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title">
                                <h3>{{ trans('website.categories') }}</h3>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">Cardiology <span>(8)</span></a></li>
                                <li><a href="#">Neurology <span>(6)</span></a></li>
                                <li><a href="#">Orthopedics <span>(5)</span></a></li>
                                <li><a href="#">Pediatrics <span>(7)</span></a></li>
                                <li><a href="#">General Health <span>(12)</span></a></li>
                            </ul>
                        </div>

                        <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title">
                                <h3>{{ trans('website.recent_posts') }}</h3>
                            </div>
                            <article class="post">
                                <figure class="post-thumb"><img src="{{URL::asset('WebSite/images/resource/post-thumb-1.jpg')}}" alt=""><a href="{{ url('blog-detail') }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ url('blog-detail') }}">In this hospital there are special surgeon</a></div>
                                <div class="post-info">August 25, 2023</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="{{URL::asset('WebSite/images/resource/post-thumb-2.jpg')}}" alt=""><a href="{{ url('blog-detail') }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ url('blog-detail') }}">World AIDS Day, designated on 1 December</a></div>
                                <div class="post-info">August 24, 2023</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="{{URL::asset('WebSite/images/resource/post-thumb-3.jpg')}}" alt=""><a href="{{ url('blog-detail') }}" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="{{ url('blog-detail') }}">More than 80 clinical trials launch</a></div>
                                <div class="post-info">August 23, 2023</div>
                            </article>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title">
                                <h3>{{ trans('website.tags') }}</h3>
                            </div>
                            <a href="#">Health</a>
                            <a href="#">Medical</a>
                            <a href="#">Surgery</a>
                            <a href="#">Cardiology</a>
                            <a href="#">Neurology</a>
                            <a href="#">Treatment</a>
                            <a href="#">Hospital</a>
                            <a href="#">Emergency</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

