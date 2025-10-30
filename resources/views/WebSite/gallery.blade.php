@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.gallery') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.gallery') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>{{ trans('website.our_gallery') }}</h2>
                <div class="separator"></div>
            </div>

            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">{{ trans('website.all') }}</li>
                        <li class="filter" data-role="button" data-filter=".hospital">{{ trans('website.hospital') }}</li>
                        <li class="filter" data-role="button" data-filter=".doctors">{{ trans('website.doctors') }}</li>
                        <li class="filter" data-role="button" data-filter=".equipment">{{ trans('website.equipment') }}</li>
                        <li class="filter" data-role="button" data-filter=".patients">{{ trans('website.patients') }}</li>
                    </ul>
                </div>

                <div class="filter-list row clearfix">
                    <!-- Gallery Block -->
                    <div class="gallery-block mix all hospital col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/1.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/1.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all doctors col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/2.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/2.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all equipment col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/3.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/3.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all patients col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/4.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/4.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all hospital col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/5.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/5.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all doctors col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/6.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/6.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all equipment col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/7.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/7.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all patients col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/8.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/8.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Gallery Block -->
                    <div class="gallery-block mix all hospital col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="{{URL::asset('WebSite/images/gallery/9.jpg')}}" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="{{URL::asset('WebSite/images/gallery/9.jpg')}}" class="link" data-fancybox="gallery" data-caption=""><span class="icon flaticon-magnifying-glass-1"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->
@endsection

