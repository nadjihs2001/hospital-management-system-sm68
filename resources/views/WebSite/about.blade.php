@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.about_us') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.about_us') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Health Section -->
    <section class="health-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="border-line"></div>
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>{{ trans('website.about_title') }} <br> {{ trans('website.about_subtitle') }}</h2>
                                <div class="separator"></div>
                            </div>
                            <div class="text">{{ trans('website.about_description') }}</div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. 
                                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </div>
                            <div class="row clearfix">
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>{{ trans('website.qualified_doctors') }}</li>
                                        <li>{{ trans('website.emergency_help') }}</li>
                                        <li>{{ trans('website.medical_treatment') }}</li>
                                    </ul>
                                </div>
                                <div class="column col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one">
                                        <li>{{ trans('website.medical_professionals') }}</li>
                                        <li>24/7 {{ trans('website.services') }}</li>
                                        <li>{{ trans('website.primary_healthcare') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/resource/image-3.jpg')}}" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Health Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-doctor-stethoscope"></div>
                            <h3><a href="#">{{ trans('website.medical_treatment') }}</a></h3>
                        </div>
                        <div class="text">{{ trans('website.feature_description') }}</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon flaticon-ambulance-side-view"></div>
                            <h3><a href="#">{{ trans('website.emergency_help') }}</a></h3>
                        </div>
                        <div class="text">{{ trans('website.feature_description') }}</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-user-md"></div>
                            <h3><a href="#">{{ trans('website.qualified_doctors') }}</a></h3>
                        </div>
                        <div class="text">{{ trans('website.feature_description') }}</div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="upper-box">
                            <div class="icon fas fa-briefcase-medical"></div>
                            <h3><a href="#">{{ trans('website.medical_professionals') }}</a></h3>
                        </div>
                        <div class="text">{{ trans('website.feature_description') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->

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

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.medical_specialists') }}</h2>
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
                                <a href="#" class="appointment">{{ trans('website.make_appointment') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Dr. Andrea Gonia</a></h3>
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
                                <a href="#" class="appointment">{{ trans('website.make_appointment') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Dr. Robert Smith</a></h3>
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
                                <a href="#" class="appointment">{{ trans('website.make_appointment') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Dr. Will Laura</a></h3>
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
                                <a href="#" class="appointment">{{ trans('website.make_appointment') }}</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">Dr. Alex Ferguson</a></h3>
                            <div class="designation">Orthopedic Specialist</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->
@endsection

