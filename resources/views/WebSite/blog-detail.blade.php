@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.blog_detail') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ url('blog') }}">{{ trans('website.blog') }}</a></li>
                <li>{{ trans('website.blog_detail') }}</li>
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
                    <div class="blog-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/resource/news-detail.jpg')}}" alt="" />
                            </div>
                            <div class="lower-content">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-profile-user"></span>By <span class="theme_color">Admin</span></li>
                                    <li><span class="icon flaticon-calendar-1"></span>August 25, 2023</li>
                                    <li><span class="icon flaticon-comment"></span>3 Comments</li>
                                </ul>
                                <h2>In this hospital there are special surgeon</h2>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                                <blockquote>
                                    <div class="quote-icon flaticon-quote"></div>
                                    <div class="quote-text">The hospital is committed to providing the highest quality care to all patients. Our team of experienced surgeons and medical professionals work tirelessly to ensure the best outcomes.</div>
                                    <div class="quote-author">- Dr. John Smith</div>
                                </blockquote>
                                <div class="text">
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </div>

                                <!-- Post Share Options -->
                                <div class="post-share-options">
                                    <div class="post-share-inner clearfix">
                                        <div class="pull-left tags">
                                            <span>{{ trans('website.tags') }}: </span>
                                            <a href="#">Health</a>
                                            <a href="#">Surgery</a>
                                            <a href="#">Medical</a>
                                        </div>
                                        <ul class="pull-right social-box">
                                            <li class="share">{{ trans('website.share') }}: </li>
                                            <li><a href="#" class="fa fa-facebook-f"></a></li>
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-google"></a></li>
                                            <li><a href="#" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment Form -->
                        <div class="comment-form">
                            <div class="group-title">
                                <h3>{{ trans('website.leave_comment') }}</h3>
                            </div>
                            <form method="post" action="#">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="{{ trans('website.your_name') }}" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="{{ trans('website.your_email') }}" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="{{ trans('website.your_message') }}"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                            <span class="txt">{{ trans('website.submit_comment') }}</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
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

