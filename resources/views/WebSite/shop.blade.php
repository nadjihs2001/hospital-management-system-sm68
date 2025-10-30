@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.shop') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li>{{ trans('website.shop') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <!-- Shop Upper Box -->
                    <div class="shop-upper-box">
                        <div class="items-label">Showing 1–12 of 36 results</div>
                        <div class="ordering">
                            <form method="post" action="#">
                                <select class="custom-select-box">
                                    <option>{{ trans('website.default_sorting') }}</option>
                                    <option>{{ trans('website.by_popularity') }}</option>
                                    <option>{{ trans('website.by_rating') }}</option>
                                    <option>{{ trans('website.price_low_high') }}</option>
                                    <option>{{ trans('website.price_high_low') }}</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-1.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Digital Thermometer</a></h3>
                                    <div class="price">$25.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-2.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Blood Pressure Monitor</a></h3>
                                    <div class="price">$45.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-3.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Pulse Oximeter</a></h3>
                                    <div class="price">$35.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-4.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">First Aid Kit</a></h3>
                                    <div class="price">$55.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-5.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Stethoscope</a></h3>
                                    <div class="price">$65.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-6.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Nebulizer Machine</a></h3>
                                    <div class="price">$85.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-7.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Wheelchair</a></h3>
                                    <div class="price">$250.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-8.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Walking Cane</a></h3>
                                    <div class="price">$30.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Shop Item -->
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-9.jpg')}}" alt="" /></a>
                                    <div class="overlay-box">
                                        <ul class="option-box">
                                            <li><a href="{{ url('shop-single') }}"><span class="far fa-eye"></span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('shop-single') }}">Glucose Meter</a></h3>
                                    <div class="price">$40.00</div>
                                    <a href="#" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.add_to_cart') }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span> </a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#"><span class="fa fa-angle-right"></span> </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <aside class="sidebar sticky-top">
                        <!-- Search Widget -->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="{{ trans('website.search_products') }}" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title">
                                <h3>{{ trans('website.categories') }}</h3>
                            </div>
                            <ul class="cat-list">
                                <li><a href="#">Medical Equipment <span>(12)</span></a></li>
                                <li><a href="#">Diagnostic Tools <span>(8)</span></a></li>
                                <li><a href="#">First Aid <span>(6)</span></a></li>
                                <li><a href="#">Mobility Aids <span>(5)</span></a></li>
                                <li><a href="#">Health Monitors <span>(9)</span></a></li>
                            </ul>
                        </div>

                        <!-- Price Filter Widget -->
                        <div class="sidebar-widget price-filter">
                            <div class="sidebar-title">
                                <h3>{{ trans('website.filter_by_price') }}</h3>
                            </div>
                            <div class="range-slider-one clearfix">
                                <div class="price-range-slider"></div>
                                <div class="input">
                                    <input type="text" class="property-amount" name="field-name" readonly>
                                </div>
                                <div class="title">{{ trans('website.price') }}: </div>
                                <button type="button" class="theme-btn btn-style-two"><span class="txt">{{ trans('website.filter') }}</span></button>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection

