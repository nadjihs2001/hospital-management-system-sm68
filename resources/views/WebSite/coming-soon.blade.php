<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocale() ==='ar' ? 'rtl': ''}}">
<head>
    <meta charset="utf-8">
    <title>{{ trans('website.coming_soon') }} - MediTech</title>
    <!-- Stylesheets -->
    <link href="{{URL::asset('WebSite/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::asset('WebSite/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('WebSite/css/responsive.css')}}" rel="stylesheet">

    <link rel="shortcut icon" href="{{URL::asset('WebSite/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('WebSite/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <div class="page-wrapper">
        <!-- Coming Soon Section -->
        <section class="coming-soon-section" style="background-image: url({{URL::asset('WebSite/images/background/coming-soon.jpg')}})">
            <div class="auto-container">
                <div class="content">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{URL::asset('WebSite/images/logo.png')}}" alt="" title=""></a>
                    </div>
                    <h1>{{ trans('website.coming_soon') }}</h1>
                    <div class="text">{{ trans('website.coming_soon_message') }}</div>

                    <!-- Time Countdown -->
                    <div class="time-countdown clearfix" data-countdown="2024/12/31"></div>

                    <!-- Newsletter Form -->
                    <div class="newsletter-form">
                        <form method="post" action="#">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="{{ trans('website.enter_email') }}" required>
                                <button type="submit" class="theme-btn btn-style-two">
                                    <span class="txt">{{ trans('website.notify_me') }}</span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="#" class="fa fa-facebook-f"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Coming Soon Section -->
    </div>

    <script src="{{URL::asset('WebSite/js/jquery.js')}}"></script>
    <script src="{{URL::asset('WebSite/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('WebSite/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('WebSite/js/jquery.countdown.js')}}"></script>
    <script src="{{URL::asset('WebSite/js/script.js')}}"></script>
</body>
</html>

