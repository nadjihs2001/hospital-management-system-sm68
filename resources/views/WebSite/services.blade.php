@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.services') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.services') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Services Section Three -->
    <section class="services-section-three">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.our_services') }}</h2>
                <div class="separator"></div>
            </div>

            <div class="row clearfix">
                @php
                    $icons = ['flaticon-heart-2', 'flaticon-brain', 'flaticon-kidney', 'flaticon-stomach', 'flaticon-eye', 'flaticon-tooth-1', 'flaticon-bone', 'flaticon-lungs', 'flaticon-ambulance-side-view'];
                    $delays = ['0ms', '250ms', '500ms'];
                @endphp

                @forelse($services as $index => $service)
                    <!-- Service Block Three -->
                    <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="{{ $delays[$index % 3] }}" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="{{ route('service-details', $service->id) }}">
                                    <img src="{{URL::asset('WebSite/images/resource/service-' . (($index % 9) + 1) . '.jpg')}}" alt="{{ $service->name }}" />
                                </a>
                            </div>
                            <div class="lower-content">
                                <div class="upper-box">
                                    <div class="icon {{ $icons[$index % count($icons)] }}"></div>
                                    <h3><a href="{{ route('service-details', $service->id) }}">{{ $service->name }}</a></h3>
                                </div>
                                <div class="text">{{ Str::limit($service->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.', 100) }}</div>
                                <a href="{{ route('service-details', $service->id) }}" class="read-more">{{ trans('website.read_more') }} <span class="arrow flaticon-long-arrow-pointing-to-the-right"></span></a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center">{{ trans('website.no_services_available') }}</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- End Services Section Three -->

    <!-- Appointment Section Two -->
    <section class="appointment-section-two">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="{{URL::asset('WebSite/images/resource/doctor-2.png')}}" alt=""/>
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
    <!-- End Appointment Section Two -->
@endsection

