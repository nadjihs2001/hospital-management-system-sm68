@extends('WebSite.layouts.master')

@section('content')
    <!-- Main Slider Three -->
    <section class="main-slider-three">
        <div class="banner-carousel">
            <!-- Swiper -->
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>{{ trans('website.hero_title') }}</h2>
                                    <div class="text">
                                        {{ trans('website.hero_subtitle') }}
                                    </div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">{{ trans('website.appointments') }}</span></a>
                                        <a href="services.html" class="theme-btn services-btn">{{ trans('website.services') }}</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/3.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>{{ trans('website.hero_title') }}</h2>
                                    <div class="text">{{ trans('website.hero_subtitle') }}
                                    </div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">{{ trans('website.appointment') }}</span></a>
                                        <a href="services.html" class="theme-btn services-btn">{{ trans('website.services') }}</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/3.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="swiper-slide slide">
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h2>Your Most Trusted Health Partner For Life.</h2>
                                    <div class="text">We offer free consulting and the best project management for your
                                        ideas, 100% delivery guaranteed.
                                    </div>
                                    <div class="btn-box">
                                        <a href="contact.html" class="theme-btn appointment-btn"><span class="txt">Appointment</span></a>
                                        <a href="services.html" class="theme-btn services-btn">Services</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/main-slider/3.jpg')}}" alt=""/>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- End Main Slider -->

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
                            <div class="text">{{ trans('website.about_description') }}
                            </div>
                            <a href="about.html" class="theme-btn btn-style-one"><span class="txt">{{ trans('website.more_about_us') }}</span></a>
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

    <!-- Department Section Three -->
    <section class="department-section-three">
        <div class="image-layer" style="background-image:url(images/background/6.jpg)"></div>
        <div class="auto-container">
            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <h2>{{ trans('website.departments_title') }}</h2>
                            <div class="separator"></div>
                        </div>
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#tab-urology" class="tab-btn active-btn">{{ trans('website.urology_department') }}</li>
                            <li data-tab="#tab-department" class="tab-btn">{{ trans('website.neurology_department') }}</li>
                            <li data-tab="#tab-gastrology" class="tab-btn">{{ trans('website.gastrology_department') }}</li>
                            <li data-tab="#tab-cardiology" class="tab-btn">{{ trans('website.cardiology_department') }}</li>
                            <li data-tab="#tab-eye" class="tab-btn">{{ trans('website.eye_care_department') }}</li>
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">

                            <!-- Tab -->
                            <div class="tab" id="tab-urology">
                                <div class="content">
                                    <h2>قسم المسالك البولية</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab active-tab" id="tab-department">
                                <div class="content">
                                    <h2>Neurology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-gastrology">
                                <div class="content">
                                    <h2>Gastrology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-cardiology">
                                <div class="content">
                                    <h2>Cardiology Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="tab-eye">
                                <div class="content">
                                    <h2>Eye Care Department</h2>
                                    <div class="title">Department of Neurology</div>
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                            ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                            parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
                                            pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                            pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                            nec, vulputate eget, arcu.</p>
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - Neurology Service</h3>
                                            <div class="column-text">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                penatibus
                                            </div>
                                        </div>
                                    </div>
                                    <a href="doctors-detail.html" class="theme-btn btn-style-two"><span class="txt">View More</span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Department Section -->

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
                            <img src="images/resource/team-1.jpg" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#" class="appointment">Make Appointment</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">الدكتورة أندريا جونيا</a></h3>
                            <div class="designation">أخصائي السرطان</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#" class="appointment">Make Appointment</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">د. روبت سميث</a></h3>
                            <div class="designation">جراح قلب</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#" class="appointment">Make Appointment</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">دكتور ويل لورا</a></h3>
                            <div class="designation">طبيب الأسرة</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt=""/>
                            <div class="overlay-box">
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                </ul>
                                <a href="#" class="appointment">Make Appointment</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="#">الدكتور أليكس فورغسين</a></h3>
                            <div class="designation">أخصائي تقويم العظام</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- Video Section -->
    <section class="video-section" style="background-image:url(images/background/5.jpg)">
        <div class="auto-container">
            <div class="content">
                <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-box"><span
                        class="flaticon-play-button"><i class="ripple"></i></span></a>
                <div class="text">{{ trans('website.we_care_health') }}<h2>{{ trans('website.we_care_you') }}</h2>
                </div>
            </div>
    </section>
    <!-- End Video Section -->

    <!-- Appointment Section Two -->
    <section class="appointment-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="images/resource/doctor-2.png" alt=""/>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>{{ trans('website.make_appointment') }}</h2>
                                <div class="separator"></div>
                            </div>

                            <!-- Appointment Form -->
                            <div class="appointment-form">
                                <livewire:appointments.create/>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Two -->
    <section class="testimonial-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.what_patients_say') }}</h2>
                <div class="separator"></div>
            </div>
            <div class="testimonial-carousel owl-carousel owl-theme">

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-4.jpg" alt=""/>
                        </div>
                        <div class="text">
                            يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                            لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                            نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>ماكس وينشستر</h3>
                                        <div class="author">مريض الكلى</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-5.jpg" alt=""/>
                        </div>
                        <div class="text">
                            يعد المركز الطبي مكانًا رائعًا للحصول على جميع احتياجاتك الطبية. دخلت
                            لإجراء فحص ولم تنتظر أكثر من 5 دقائق قبل رؤيتي. يمكنني أن أتصور
                            نوع الخدمة التي تحصل عليها في حالة المشكلات الأكثر خطورة. شكرًا!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>جاك مونيتا</h3>
                                        <div class="author">مريض الكلى</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-4.jpg" alt=""/>
                        </div>
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                            for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                            the type of service you get for more serious issues. Thanks!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>Max Winchester</h3>
                                        <div class="author">Kidny Patient</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tesimonial Block Two -->
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/author-5.jpg" alt=""/>
                        </div>
                        <div class="text">Medical Centre is a great place to get all of your medical needs. I came in
                            for a check up and did not wait more than 5 minutes before I was seen. I can only imagine
                            the type of service you get for more serious issues. Thanks!
                        </div>
                        <div class="lower-box">
                            <div class="clearfix">

                                <div class="pull-left">
                                    <div class="quote-icon flaticon-quote"></div>
                                </div>
                                <div class="pull-right">
                                    <div class="author-info">
                                        <h3>Jack Monita</h3>
                                        <div class="author">Kidny Patient</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section Two -->

    <!-- Counter Section -->
    <section class="counter-section style-two" style="background-image: url(images/background/pattern-3.png)">
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

    <!-- Doctor Info Section -->
    <section class="doctor-info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>{{ trans('website.working_hours') }}</h3>
                            <ul class="doctor-time-list">
                                <li>{{ trans('website.monday_to_friday') }}<span>8:00am–7:00pm</span></li>
                                <li>{{ trans('website.saturday') }} <span>9:00am–5:00pm</span></li>
                                <li>{{ trans('website.sunday') }}<span>9:00am–3:00pm</span></li>
                            </ul>
                            <h4>{{ trans('website.emergencies') }}</h4>
                            <div class="phone">{{ trans('website.call_us') }} <strong>+898 68679 575 09</strong></div>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>{{ trans('website.doctor_timetable') }}</h3>
                            <div class="text">
                                {{ trans('website.timetable_description') }}
                            </div>
                            <a href="#" class="detail">{{ trans('website.more_details') }}</a>
                        </div>
                    </div>

                    <!-- Doctor Block -->
                    <div class="doctor-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <h3>{{ trans('website.primary_healthcare') }}</h3>
                            <div class="text">{{ trans('website.healthcare_description') }}
                            </div>
                            <a href="#" class="detail">{{ trans('website.call_now') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctor Info Section -->

    <!-- News Section Two -->
    <section class="news-section-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.latest_news_articles') }}</h2>
                <div class="separator style-three"></div>
            </div>
            <div class="row clearfix">

                <!-- News Block Two -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-4.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <ul class="post-info">
                                    <li><span
                                            class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                                        02
                                    </li>
                                    <li><span class="icon flaticon-heart"></span> 126</li>
                                </ul>
                                <ul class="post-meta">
                                    <li>21 يونيو 2018 الساعة 8:12 مساءً</li>
                                    <li>{{ trans('website.posted_by') }}: {{ trans('website.admin') }}</li>
                                </ul>
                                <h3><a href="blog-detail.html">{{ trans('website.diagnostic_services') }}</a></h3>
                                <div class="text">
                                    {{ trans('website.news_description') }}
                                </div>
                                <a href="blog-detail.html" class="theme-btn btn-style-five"><span
                                        class="txt">{{ trans('website.read_more') }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Block Two -->
                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-5.jpg" alt=""/></a>
                        </div>
                        <div class="lower-content">
                            <div class="content">
                                <ul class="post-info">
                                    <li><span
                                            class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                                        02
                                    </li>
                                    <li><span class="icon flaticon-heart"></span> 126</li>
                                </ul>
                                <ul class="post-meta">
                                    <li>21 يونيو 2018 الساعة 8:12 مساءً</li>
                                    <li>Post بواسطة: Admin</li>
                                </ul>
                                <h3><a href="blog-detail.html">خدمات التشخيص لانتقاء نتائج فعالة بشكل صحيح</a></h3>
                                <div class="text">
                                    هناك الكثير من النساء اللواتي يجهلن المخاطر العديدة
                                    المرتبطة بصحتهم وتجاهل في النهاية
                                </div>
                                <a href="blog-detail.html" class="theme-btn btn-style-five"><span
                                        class="txt">اقرا المزيد</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <!--Clients Section-->
    <section class="clients-section">
        <div class="outer-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->
@endsection
