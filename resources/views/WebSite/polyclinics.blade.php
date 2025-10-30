@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.departments') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.departments') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Department Section Three -->
    <section class="department-section-three style-two">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.our_departments') }}</h2>
                <div class="separator"></div>
            </div>

            <!-- Department Tabs-->
            <div class="department-tabs tabs-box">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <!--Tab Btns-->
                        <ul class="tab-btns tab-buttons clearfix">
                            @foreach($polyclinics as $index => $polyclinic)
                                <li data-tab="#tab-{{ $polyclinic->id }}" class="tab-btn {{ $index === 0 ? 'active-btn' : '' }}">{{ $polyclinic->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!--Column-->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <!--Tabs Container-->
                        <div class="tabs-content">
                            @php
                                $images = ['department-1.jpg', 'department-2.jpg', 'department-3.jpg', 'department-4.jpg', 'department-5.jpg', 'department-6.jpg', 'department-7.jpg', 'department-8.jpg'];
                            @endphp

                            @foreach($polyclinics as $index => $polyclinic)
                            <!-- Tab -->
                            <div class="tab {{ $index === 0 ? 'active-tab' : '' }}" id="tab-{{ $polyclinic->id }}">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{URL::asset('WebSite/images/resource/' . $images[$index % count($images)])}}" alt="{{ $polyclinic->name }}" />
                                    </div>
                                    <h2>{{ $polyclinic->name }}</h2>
                                    <div class="title">{{ trans('website.department_of') }} {{ $polyclinic->name }}</div>
                                    <div class="text">
                                        @if($polyclinic->description)
                                            {!! nl2br(e($polyclinic->description)) !!}
                                        @else
                                            <p>{{ trans('website.polyclinic_default_description_1') }}</p>
                                            <p>{{ trans('website.polyclinic_default_description_2') }}</p>
                                        @endif
                                    </div>
                                    <div class="two-column row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>01 - {{ trans('website.our_services') }}</h3>
                                            <div class="column-text">{{ trans('website.comprehensive_diagnostic_services') }}</div>
                                        </div>
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <h3>02 - {{ trans('website.treatment_options') }}</h3>
                                            <div class="column-text">{{ trans('website.advanced_treatment_options') }}</div>
                                        </div>
                                    </div>
                                    <a href="{{ route('polyclinic-details', $polyclinic->id) }}" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.view_more') }}</span></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Department Section -->
@endsection

