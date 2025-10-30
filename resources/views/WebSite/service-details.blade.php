@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.service_details') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ url('services') }}">{{ trans('website.services') }}</a></li>
                <li>{{ trans('website.service_details') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- service Detail Section -->
    <section class="service-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/resource/service-detail.jpg')}}" alt="{{ $service->name }}" />
                            </div>
                            <h2>{{ $service->name }}</h2>
                            <div class="designation">{{ trans('website.service_details') }}</div>
                            <ul class="service-info-list">
                                <li><span class="icon flaticon-money"></span>{{ trans('website.price') }}: {{ number_format($service->price, 2) }} {{ trans('website.currency') }}</li>
                                <li><span class="icon flaticon-check-mark"></span>{{ trans('website.status') }}: {{ $service->status ? trans('website.active') : trans('website.inactive') }}</li>
                            </ul>
                            <div class="text">
                                @if($service->description)
                                    <p>{{ $service->description }}</p>
                                @else
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                @endif
                            </div>

                            <h3>{{ trans('website.service_information') }}</h3>
                            <div class="text">
                                <p>{{ trans('website.service_description_text') }}</p>
                            </div>
                            <ul class="list-style-two">
                                <li>{{ trans('website.professional_service') }}</li>
                                <li>{{ trans('website.experienced_staff') }}</li>
                                <li>{{ trans('website.modern_equipment') }}</li>
                                <li>{{ trans('website.quality_care') }}</li>
                                <li>{{ trans('website.affordable_prices') }}</li>
                            </ul>

                            <h3>{{ trans('website.why_choose_us') }}</h3>
                            <ul class="list-style-two">
                                <li>{{ trans('website.best_quality_service') }}</li>
                                <li>{{ trans('website.experienced_professionals') }}</li>
                                <li>{{ trans('website.state_of_art_facilities') }}</li>
                                <li>{{ trans('website.patient_satisfaction') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <!-- Appointment Widget -->
                        <div class="sidebar-widget appointment-widget">
                            <div class="widget-content">
                                <h3>{{ trans('website.make_appointment') }}</h3>
                                <div class="appointment-form">
                                    <livewire:appointments.create/>
                                </div>
                            </div>
                        </div>

                        <!-- Working Hours Widget -->
                        <div class="sidebar-widget working-hours-widget">
                            <div class="widget-content">
                                <h3>{{ trans('website.working_hours') }}</h3>
                                <ul class="service-time-list">
                                    <li>{{ trans('website.monday_to_friday') }}<span>8:00am–7:00pm</span></li>
                                    <li>{{ trans('website.saturday') }}<span>9:00am–5:00pm</span></li>
                                    <li>{{ trans('website.sunday') }}<span>{{ trans('website.closed') }}</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Contact Widget -->
                        <div class="sidebar-widget contact-widget">
                            <div class="widget-content">
                                <h3>{{ trans('website.contact_info') }}</h3>
                                <ul class="contact-list">
                                    <li><span class="icon flaticon-placeholder"></span>2130 Fulton Street<br>San Diego, CA 94117</li>
                                    <li><span class="icon flaticon-call"></span><a href="tel:+898-68679-575-09">+898 68679 575 09</a></li>
                                    <li><span class="icon flaticon-message"></span><a href="mailto:info@meditech.com">info@meditech.com</a></li>
                                </ul>
                                <ul class="social-icons">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End service Detail Section -->
@endsection

