@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.faq') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.faq') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.frequently_asked_questions') }}</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                <!-- FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box">
                        <!-- Block -->
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                What services does MediTech Hospital provide?
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                    <div class="text">MediTech Hospital provides comprehensive healthcare services including emergency care, surgery, cardiology, neurology, orthopedics, pediatrics, and many other specialized medical services. We have state-of-the-art facilities and experienced medical professionals to serve you.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                How can I make an appointment?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can make an appointment by calling our helpline at +898 68679 575 09, using our online appointment booking system on this website, or by visiting our hospital reception desk. We recommend booking in advance to ensure availability.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                What are your visiting hours?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Our visiting hours are from 10:00 AM to 8:00 PM daily. However, ICU visiting hours are restricted to 11:00 AM to 12:00 PM and 5:00 PM to 6:00 PM. Please check with the specific department for any variations.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                Do you accept insurance?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we accept most major insurance plans. Please contact our billing department or check with your insurance provider to confirm coverage. We also offer flexible payment options for uninsured patients.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                Is emergency care available 24/7?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, our emergency department is open 24 hours a day, 7 days a week, including holidays. We have experienced emergency physicians and staff ready to handle all types of medical emergencies.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- FAQ Column -->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <ul class="accordion-box">
                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                How can I get my medical records?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">You can request your medical records by filling out a medical records release form at our medical records department. You'll need to provide valid identification. Records can be provided in physical or digital format as per your preference.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                Do you offer telemedicine services?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we offer telemedicine consultations for certain conditions and follow-up appointments. You can schedule a virtual appointment through our website or by calling our appointment desk. This service is available for select specialties.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                What should I bring to my appointment?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Please bring your insurance card, photo ID, list of current medications, any relevant medical records, and your payment method. If you're a new patient, please arrive 15 minutes early to complete registration forms.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                Do you have parking facilities?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, we have ample parking facilities available for patients and visitors. The parking is located adjacent to the main hospital building. Valet parking service is also available at the main entrance.</div>
                                </div>
                            </div>
                        </li>

                        <!-- Block -->
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>
                                Can I choose my doctor?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Yes, you can request a specific doctor when making your appointment, subject to their availability. Our staff will do their best to accommodate your preference. You can view our doctors' profiles on our website to help you make an informed choice.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Section -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image: url({{URL::asset('WebSite/images/background/5.jpg')}})">
        <div class="auto-container">
            <div class="content">
                <h2>{{ trans('website.still_have_questions') }}</h2>
                <div class="text">{{ trans('website.contact_us_for_help') }}</div>
                <a href="{{ url('contact') }}" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.contact_us') }}</span></a>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->
@endsection

