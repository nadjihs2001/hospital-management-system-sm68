<div class="nav-outer clearfix">
    <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="navbar-header">
            <!-- Togg le Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon flaticon-menu"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                <li class="current"><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li class="dropdown"><a href="#">{{ trans('website.about_us') }}</a>
                    <ul>
                        <li><a href="{{ url('about') }}">{{ trans('website.about_us') }}</a></li>
                        <li><a href="{{ url('team') }}">{{ trans('website.our_team') }}</a></li>
                        <li><a href="{{ url('faq') }}">{{ trans('website.faq') }}</a></li>
                        
                        <li><a href="{{ url('gallery') }}">{{ trans('website.gallery') }}</a></li>
                        <li><a href="{{ url('coming-soon') }}">{{ trans('website.coming_soon') }}</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#">{{ trans('website.services') }}</a>
                    <ul>
                        <li><a href="{{ url('services') }}">{{ trans('website.services') }}</a></li>
                        <li><a href="{{ url('service-details') }}">{{ trans('website.service_details') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">{{ trans('website.polyclinics') }}</a>
                    <ul>
                        <li><a href="{{ url('polyclinics') }}">{{ trans('website.polyclinics') }}</a></li>
                        <li><a href="{{ url('polyclinic-details') }}">{{ trans('website.polyclinic_details') }}</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">{{ trans('website.blog') }}</a>
                    <ul>
                        <li><a href="{{ url('blog') }}">{{ trans('website.our_blog') }}</a></li>
                        <li><a href="{{ url('blog-classic') }}">{{ trans('website.blog_classic') }}</a></li>
                        <li><a href="{{ url('blog-detail') }}">{{ trans('website.blog_detail') }}</a></li>
                    </ul>
                </li>
                

                <li><a href="{{ url('contact') }}">{{ trans('website.contact') }}</a></li>

                <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </nav>
    <!-- Main Menu End-->

    <!-- Main Menu End-->
    <div class="outer-box clearfix">
        <!-- Main Menu End-->
        <div class="nav-box">
            <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span></div>
        </div>

        <!-- Social Box -->
        <ul class="social-box clearfix">
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
            <li><a title="{{ trans('website.login') }}" href="{{route('dashboard.user')}}"><span class="fas fa-user"></span></a>
            </li>


        </ul>

        <!-- Search Btn -->
        <div class="search-box-btn"><span class="icon flaticon-search"></span></div>

    </div>
</div>
