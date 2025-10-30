@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ $polyclinic->name }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ route('polyclinics') }}">{{ trans('website.polyclinics') }}</a></li>
                <li>{{ $polyclinic->name }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Department Detail Section -->
    <section class="department-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="department-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/resource/department-detail.jpg')}}" alt="{{ $polyclinic->name }}" />
                            </div>
                            <h2>{{ $polyclinic->name }}</h2>
                            <div class="bold-text">{{ trans('website.comprehensive_care_advanced_technology') }}</div>
                            <div class="text">
                                @if($polyclinic->description)
                                    {!! nl2br(e($polyclinic->description)) !!}
                                @else
                                    <p>{{ trans('website.polyclinic_detail_default_1') }}</p>
                                    <p>{{ trans('website.polyclinic_detail_default_2') }}</p>
                                @endif
                            </div>

                            <h3>{{ trans('website.our_services') }}</h3>
                            <div class="text">
                                <p>{{ trans('website.we_provide_comprehensive_services') }}</p>
                            </div>
                            <ul class="list-style-two">
                                <li>{{ trans('website.diagnostic_services') }}</li>
                                <li>{{ trans('website.treatment_services') }}</li>
                                <li>{{ trans('website.preventive_care') }}</li>
                                <li>{{ trans('website.emergency_services') }}</li>
                                <li>{{ trans('website.rehabilitation_programs') }}</li>
                            </ul>

                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>{{ trans('website.advanced_technology') }}</h3>
                                        <ul class="list-style-two">
                                            <li>{{ trans('website.state_of_art_equipment') }}</li>
                                            <li>{{ trans('website.modern_facilities') }}</li>
                                            <li>{{ trans('website.advanced_diagnostic_tools') }}</li>
                                            <li>{{ trans('website.monitoring_systems') }}</li>
                                        </ul>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <h3>{{ trans('website.expert_team') }}</h3>
                                        <ul class="list-style-two">
                                            <li>{{ trans('website.board_certified_doctors') }}</li>
                                            <li>{{ trans('website.experienced_specialists') }}</li>
                                            <li>{{ trans('website.specialized_nurses') }}</li>
                                            <li>{{ trans('website.dedicated_support_staff') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @if($polyclinic->doctors->count() > 0)
                            <h3>{{ trans('website.our_doctors') }}</h3>
                            <div class="text">
                                <p>{{ trans('website.meet_our_expert_doctors') }}</p>
                            </div>
                            <ul class="list-style-two">
                                @foreach($polyclinic->doctors as $doctor)
                                    <li>{{ $doctor->name }} - {{ $doctor->email }}</li>
                                @endforeach
                            </ul>
                            @endif

                            <h3>{{ trans('website.why_choose_our_department') }}</h3>
                            <div class="text">
                                <p>{{ trans('website.committed_highest_quality_care') }}</p>
                            </div>
                            <ul class="list-style-two">
                                <li>{{ trans('website.experienced_compassionate_team') }}</li>
                                <li>{{ trans('website.state_of_art_facilities') }}</li>
                                <li>{{ trans('website.personalized_treatment_plans') }}</li>
                                <li>{{ trans('website.24_7_emergency_care') }}</li>
                                <li>{{ trans('website.comprehensive_programs') }}</li>
                                <li>{{ trans('website.patient_education_support') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <!-- Department List Widget -->
                        <div class="sidebar-widget department-widget">
                            <div class="widget-content">
                                <h3>{{ trans('website.all_departments') }}</h3>
                                <ul class="department-list">
                                    @php
                                        $allPolyclinics = \App\Models\Polyclinic::all();
                                    @endphp
                                    @foreach($allPolyclinics as $poly)
                                        <li class="{{ $poly->id == $polyclinic->id ? 'active' : '' }}">
                                            <a href="{{ route('polyclinic-details', $poly->id) }}">{{ $poly->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <!-- Appointment Widget -->
                        <div class="sidebar-widget appointment-widget">
                            <div class="widget-content">
                                <h3>{{ trans('website.make_appointment') }}</h3>
                                <div class="appointment-form">
                                    <livewire:appointments.create/>
                                </div>
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
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Department Detail Section -->
@endsection

