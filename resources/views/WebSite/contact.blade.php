@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.contact') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.contact') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-placeholder"></span>
                        </div>
                        <h3>{{ trans('website.our_location') }}</h3>
                        <div class="text">2130 Fulton Street<br>San Diego, CA 94117-1080<br>United States</div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-call"></span>
                        </div>
                        <h3>{{ trans('website.phone_number') }}</h3>
                        <div class="text">
                            <a href="tel:+898-68679-575-09">+898 68679 575 09</a><br>
                            <a href="tel:+898-68679-575-10">+898 68679 575 10</a>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="icon-box">
                            <span class="icon flaticon-message"></span>
                        </div>
                        <h3>{{ trans('website.email_address') }}</h3>
                        <div class="text">
                            <a href="mailto:info@meditech.com">info@meditech.com</a><br>
                            <a href="mailto:support@meditech.com">support@meditech.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ trans('website.get_in_touch') }}</h2>
                            <div class="separator"></div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="#" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="name" placeholder="{{ trans('website.your_name') }}" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="{{ trans('website.your_email') }}" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="{{ trans('website.phone_number') }}" required>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="{{ trans('website.subject') }}" required>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="{{ trans('website.your_message') }}"></textarea>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                            <span class="txt">{{ trans('website.send_message') }}</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>{{ trans('website.working_hours') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <ul class="doctor-time-list">
                            <li>{{ trans('website.monday_to_friday') }}<span>8:00am–7:00pm</span></li>
                            <li>{{ trans('website.saturday') }}<span>9:00am–5:00pm</span></li>
                            <li>{{ trans('website.sunday') }}<span>9:00am–3:00pm</span></li>
                        </ul>
                        <h4>{{ trans('website.emergencies') }}</h4>
                        <div class="phone">{{ trans('website.call_us') }} <strong>+898 68679 575 09</strong></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="map-outer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0977184456896!2d-122.41941548468186!3d37.77492977975903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sTwitter%20HQ!5e0!3m2!1sen!2s!4v1566305692000!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
    <!-- End Map Section -->
@endsection

