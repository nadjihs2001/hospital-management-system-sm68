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
                <li><a href="{{ route('website.index') }}">Home</a></li>
                <li><a href="{{ route('website.about') }}">About Us</a></li>
                <li><a href="{{ route('website.services') }}">Our Services</a></li>
                <li><a href="{{ route('website.structures') }}">Our Structures</a></li>
                <li><a href="{{ route('website.news') }}">News</a></li>
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
            <li><a title="تسجيل دخول" href="{{route('dashboard.user')}}"><span class="fas fa-user"></span></a>
            </li>


        </ul>

        <!-- Search Btn -->
        <div class="search-box-btn"><span class="icon flaticon-search"></span></div>

    </div>
</div>
