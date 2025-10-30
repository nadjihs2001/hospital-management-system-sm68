@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.blog_classic') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.blog_classic') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Blog Classic Section -->
    <section class="blog-classic-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">25 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>3 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">In this hospital there are special surgeon</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">24 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>5 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">World AIDS Day, designated on 1 December</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">23 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>2 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">More than 80 clinical trials launch to test</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">22 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>7 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Health Will Be A Thing Of The Past</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-5.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">21 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>4 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Integrative Medicine And Oncology</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-6.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">20 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>6 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Preparing for your appointment</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-7.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">19 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>8 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Coronavirus and pregnancy</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-8.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">18 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>9 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Symptoms and causes of diabetes</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
                    </div>
                </div>

                <!-- News Block Three -->
                <div class="news-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="{{ url('blog-detail') }}"><img src="{{URL::asset('WebSite/images/resource/news-9.jpg')}}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="post-date">17 <span>Aug</span></div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-profile-user"></span>Admin</li>
                                <li><span class="icon flaticon-comment"></span>5 Comments</li>
                            </ul>
                            <h3><a href="{{ url('blog-detail') }}">Understanding heart disease</a></h3>
                            <a class="read-more" href="{{ url('blog-detail') }}">{{ trans('website.read_more') }} <span class="icon flaticon-next"></span></a>
                        </div>
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
    </section>
    <!-- End Blog Classic Section -->
@endsection

