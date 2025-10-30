@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.our_team') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.our_team') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.meet_our_team') }}</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-1.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Andrea Gonia</a></h3>
                            <div class="designation">Cancer Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-2.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Robert Smith</a></h3>
                            <div class="designation">Cardiology Surgeon</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-3.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Will Laura</a></h3>
                            <div class="designation">Family Physician</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-4.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Alex Ferguson</a></h3>
                            <div class="designation">Orthopedic Specialist</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-5.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Sarah Johnson</a></h3>
                            <div class="designation">Neurologist</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-6.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Michael Brown</a></h3>
                            <div class="designation">Pediatrician</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-7.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. Emily Davis</a></h3>
                            <div class="designation">Dermatologist</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/team-8.jpg')}}" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="{{ url('doctors-detail') }}" class="appointment">{{ trans('website.view_profile') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="{{ url('doctors-detail') }}">Dr. James Wilson</a></h3>
                            <div class="designation">Gastroenterologist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Counter Section -->
    <section class="counter-section style-two" style="background-image: url({{URL::asset('WebSite/images/background/pattern-3.png')}})">
        <div class="auto-container">
            <!-- Fact Counter -->
            <div class="fact-counter style-two">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2500" data-stop="2350">0</span>
                                </div>
                                <h4 class="counter-title">{{ trans('website.satisfied_patients') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box alternate">
                                    +<span class="count-text" data-speed="3000" data-stop="350">0</span>
                                </div>
                                <h4 class="counter-title">{{ trans('website.doctor_team') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="2150">0</span>
                                </div>
                                <h4 class="counter-title">{{ trans('website.success_mission') }}</h4>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-logout"></div>
                                <div class="count-outer count-box">
                                    +<span class="count-text" data-speed="2500" data-stop="225">0</span>
                                </div>
                                <h4 class="counter-title">{{ trans('website.successful_surgeries') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->
@endsection

