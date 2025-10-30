@extends('WebSite.layouts.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image: url({{URL::asset('WebSite/images/background/8.jpg')}})">
        <div class="auto-container">
            <h1>{{ trans('website.product_detail') }}</h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                <li><a href="{{ url('shop') }}">{{ trans('website.shop') }}</a></li>
                <li>{{ trans('website.product_detail') }}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Product Detail Section -->
    <section class="product-detail-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{URL::asset('WebSite/images/resource/products/product-detail.jpg')}}" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h2>Digital Thermometer</h2>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-alt"></span>
                            <span class="txt">(3 customer reviews)</span>
                        </div>
                        <div class="price">$25.00</div>
                        <div class="text">
                            <p>High-quality digital thermometer with fast and accurate temperature readings. Perfect for home use, featuring a large LCD display and memory function to track temperature changes.</p>
                        </div>

                        <ul class="product-info">
                            <li><strong>SKU:</strong> DT-001</li>
                            <li><strong>Category:</strong> Medical Equipment</li>
                            <li><strong>Tags:</strong> Thermometer, Medical, Health</li>
                        </ul>

                        <div class="quantity-box">
                            <div class="item-quantity">
                                <input class="quantity-spinner" type="text" value="1" name="quantity">
                            </div>
                        </div>

                        <div class="btn-box">
                            <a href="{{ url('shopping-cart') }}" class="theme-btn btn-style-two">
                                <span class="txt">{{ trans('website.add_to_cart') }}</span>
                            </a>
                            <a href="#" class="theme-btn btn-style-three">
                                <span class="txt">{{ trans('website.add_to_wishlist') }}</span>
                            </a>
                        </div>

                        <ul class="social-box">
                            <li class="share">{{ trans('website.share') }}: </li>
                            <li><a href="#" class="fa fa-facebook-f"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Product Info Tabs -->
            <div class="product-info-tabs">
                <div class="prod-tabs tabs-box">
                    <!--Tabs Container-->
                    <div class="tabs-content">
                        <!--Tab / Active Tab-->
                        <div class="tab active-tab" id="prod-details">
                            <div class="content">
                                <h3>{{ trans('website.product_description') }}</h3>
                                <p>This digital thermometer is designed for accurate and fast temperature measurement. It features advanced infrared technology that provides readings in just seconds. The large LCD display makes it easy to read results, even in low light conditions.</p>
                                <h4>Features:</h4>
                                <ul class="list-style-two">
                                    <li>Fast and accurate temperature readings</li>
                                    <li>Large LCD display with backlight</li>
                                    <li>Memory function to track temperature changes</li>
                                    <li>Fever alarm with audio notification</li>
                                    <li>Automatic shut-off to save battery</li>
                                    <li>Safe and hygienic - no contact required</li>
                                </ul>
                                <h4>Specifications:</h4>
                                <ul class="list-style-two">
                                    <li>Measurement Range: 32°C to 42.9°C (89.6°F to 109.2°F)</li>
                                    <li>Accuracy: ±0.2°C (±0.4°F)</li>
                                    <li>Measurement Time: 1 second</li>
                                    <li>Battery: 2 x AAA batteries (included)</li>
                                    <li>Dimensions: 15 x 4 x 3 cm</li>
                                    <li>Weight: 100g</li>
                                </ul>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="prod-reviews">
                            <h3>{{ trans('website.customer_reviews') }}</h3>
                            <div class="review-box">
                                <div class="review">
                                    <div class="author-thumb">
                                        <img src="{{URL::asset('WebSite/images/resource/author-1.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name">John Smith</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">Excellent product! Very accurate and easy to use. Highly recommended for home use.</div>
                                    </div>
                                </div>

                                <div class="review">
                                    <div class="author-thumb">
                                        <img src="{{URL::asset('WebSite/images/resource/author-2.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name">Sarah Johnson</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star-half-alt"></span>
                                        </div>
                                        <div class="text">Great thermometer. Fast readings and very reliable. The memory function is very useful.</div>
                                    </div>
                                </div>

                                <div class="review">
                                    <div class="author-thumb">
                                        <img src="{{URL::asset('WebSite/images/resource/author-3.jpg')}}" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="name">Michael Brown</div>
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">Perfect for monitoring my family's health. Easy to use and very accurate.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Form -->
                            <div class="review-form">
                                <h3>{{ trans('website.add_review') }}</h3>
                                <form method="post" action="#">
                                    @csrf
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="{{ trans('website.your_name') }}" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="{{ trans('website.your_email') }}" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <div class="rating-box">
                                                <div class="text">{{ trans('website.your_rating') }}:</div>
                                                <div class="rating">
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="{{ trans('website.your_review') }}"></textarea>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                                <span class="txt">{{ trans('website.submit_review') }}</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div class="related-products">
                <h3>{{ trans('website.related_products') }}</h3>
                <div class="row clearfix">
                    <!-- Shop Item -->
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-2.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ url('shop-single') }}">Blood Pressure Monitor</a></h3>
                                <div class="price">$45.00</div>
                            </div>
                        </div>
                    </div>

                    <!-- Shop Item -->
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-3.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ url('shop-single') }}">Pulse Oximeter</a></h3>
                                <div class="price">$35.00</div>
                            </div>
                        </div>
                    </div>

                    <!-- Shop Item -->
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-9.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ url('shop-single') }}">Glucose Meter</a></h3>
                                <div class="price">$40.00</div>
                            </div>
                        </div>
                    </div>

                    <!-- Shop Item -->
                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ url('shop-single') }}"><img src="{{URL::asset('WebSite/images/resource/products/product-5.jpg')}}" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ url('shop-single') }}">Stethoscope</a></h3>
                                <div class="price">$65.00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Detail Section -->
@endsection

